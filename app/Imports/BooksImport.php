<?php

namespace App\Imports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToModel;

class BooksImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Book([
            'title'        => $row[1],
            'author'       => $row[2],
            'year'         => $row[3],
            'publisher'    => $row[4],
            'city'         => $row[5],
            'cover'        => $row[6],
            'quantity'     => $row[7],
            'bookshelf_id' => $row[8],
        ]);
    }
}
