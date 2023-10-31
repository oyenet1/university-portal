<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;
    public $user;
    public $query = '';

    public function search()
    {
        $this->resetPage();
    }
    public $cid;
    public $confirm = false;
    public $update = false;
    public $form = false;

    public ?array $checked = [];
    public $sortField = 'id';
    public $sortAsc = true;

    function showForm()
    {
        $this->form = true;
    }

    public function sortBy($field)
    {

        if ($this->sortField == $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }

    function updatingSearch()
    {
        $this->resetPage();
    }
    function updatedSearch()
    {
        $this->resetPage();
    }
    function updatedPerPage()
    {
        $this->resetPage();
    }

    function confirmDelete(User $user)
    {
        // dd($user);
        $this->user = $user;
        $this->confirm = true;
    }
    function delete()
    {
        $deleted = $this->user->delete();

        if ($deleted) {
            $this->reset();
            $details = [
                'text' => 'User removed successfully',
                'title' => 'User Deleted'
            ];
            return $this->dispatch('swal:success', details: sweetAlert(...$details));
        }
    }

    function deleteMultiple()
    {
        $selectedusers = User::whereKey($this->checked)->delete();
        if ($selectedusers) {
            $this->reset();
            $details = [
                'text' => 'Users removed successfully',
                'title' => 'Multiple Users Deleted'
            ];
            return $this->dispatch('swal:success', details: sweetAlert(...$details));
        }
    }


    public $perPage = 10;
    public function render()
    {
        $users = User::search(trim($this->query))
            ->orderBy($this->sortField, $this->sortAsc ? 'desc' : 'asc')
            ->paginate($this->perPage);
        $total = User::count() - 1;
        return view('livewire.users-table', compact(['users', 'total']));
    }
}