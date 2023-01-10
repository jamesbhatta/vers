<?php

namespace App\DataTables;

use App\App\Birth;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class BirthsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'births.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\Birth $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(\App\Birth $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('births-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(true)
                  ->printable(true)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('reg_number'),
            Column::make('name'),
            Column::make('gender'),
            Column::make('dob'),
            Column::make('father_name'),
            Column::make('mother_name'),
            Column::make('grandfather_name'),
            Column::make('birth_place'),
            // 'reg_number',
            // 'name',
            // 'gender',
            // 'dob',
            // 'father_name'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Births_' . date('YmdHis');
    }
}
