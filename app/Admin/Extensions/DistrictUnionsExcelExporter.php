<?php

namespace App\Admin\Extensions;

use Encore\Admin\Grid\Exporters\AbstractExporter;

class DistrictUnionsExcelExporter extends AbstractExporter
{
    protected $filename = 'DistrictUnions.xlsx';

    protected $columns = [
        'id' => 'ID',
        'name' => 'Name',
        'district_id' => 'District',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
    ];
    
    public function export()
    {
        $filename = 'DistrictUnions-'.date('Y-m-d-H-i-s').'.xlsx';
        $this->download($filename);
    }
}