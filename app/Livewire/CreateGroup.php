<?php

namespace App\Livewire;

use App\Livewire\Forms\GroupForm;
use App\Models\Group;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class CreateGroup extends Component
{
    public GroupForm $form;

    public function save(): void
    {
        $this->validate();

        $user = Auth::user();
        $validated = $this->form->all();

        DB::beginTransaction();

        try {
            $group = Group::create($validated);
            Member::create([
                'group_id' => $group->id,
                'user_id' => $user->id,
                'role' => 'owner',
            ]);

            DB::commit();

            $this->redirectRoute('app.groups.show', $group->id, navigate: true);
        } catch (\Exception $e) {
            DB::rollBack();

            report($e);

            Session::flash('status', 'Error creating group.');

            $this->redirectRoute('app.groups.create', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.create-group');
    }
}
