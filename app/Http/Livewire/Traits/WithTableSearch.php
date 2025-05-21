<?php 
namespace App\Http\Livewire\Traits;

use Illuminate\Database\Eloquent\Builder;

trait WithTableSearch
{
    public $search = '';
    public $perPage = 10;
    public $statusFilter = null;

    public function updatedPerPage($value)
    {
        $this->perPage = $value;
    }

    /**
     * Terapkan filter standar: search dan status
     */
    public function applyTableFilters(Builder $query, array $searchableColumns = ['nama_lengkap']): Builder
    {
        if ($this->search) {
            $query->where(function ($q) use ($searchableColumns) {
                foreach ($searchableColumns as $column) {
                    $q->orWhere($column, 'like', '%' . $this->search . '%');
                }
            });
        }

        if ($this->statusFilter === 'aktif') {
            $query->where('is_active', true);
        } elseif ($this->statusFilter === 'tidak') {
            $query->where('is_active', false);
        }

        return $query;
    }
}
