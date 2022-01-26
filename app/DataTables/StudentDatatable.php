<?php

namespace App\DataTables;

use App\Models\Student;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class StudentDatatable extends DataTable
{
  
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('العمليات', 'admin.students.actions')
            ->rawColumns(['العمليات']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Governorate $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Student $student)
    {
        return $student->with('school')->newQuery();
    }

    public function html()
    {
        return $this->builder()
        ->setTableId('admindatatable-table')
        ->columns($this->getColumns())
        ->minifiedAjax()
        ->dom('Blfrtip')
        ->orderBy(1)
        ->parameters([
            'dom'          => 'Blfrtip',
            'buttons'      => [
            ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            [

                'name'              => 'id',
                'data'              => 'id',
                'title'             => '#',

            ],
            [

                'name'              => 'name',
                'data'              => 'name',
                'title'             => 'name',

            ],
            [

                'name'              => 'school.name',
                'data'              => 'school.name',
                'title'             => 'school',
            ],
            [
                'name'              => 'العمليات',
                'data'              => 'العمليات',
                'title'             => 'العمليات',
                'exportable'        => false,
                'printable'         => false,
                'orderable'         => false,
                'searchable'        => false,
            ]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Student_' . date('YmdHis');
    }
}
