<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description'];


    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    public function addItem($record) {
        return DB::transaction(function() use ($record) {
            return self::create($record);
        });
    }

    public function updateItem($id, $record) {
        $updatedRecord = DB::transaction(function() use ($record, $id) {
            return $this->where('id', $id)->update([
                'title' => $record['title'],
                'description' => $record['description'],
                'is_completed' => $record['is_completed']
            ]);
        });
    }

    public function deleteItem($id) {
        return DB::transaction(function () use ($id) {
            $record = $this->findOrFail($id); // Find the record directly
            return $record->delete();
        });
    }

}
