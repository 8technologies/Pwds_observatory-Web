<?php

namespace App\Admin\Extensions;

use Encore\Admin\Grid\Exporters\ExcelExporter;

class OPDExcelExporter extends ExcelExporter
{
    protected $fileName = 'OPDs.xlsx';

    protected $columns = [
        'id' => 'ID',
        'name' => 'Name',
        'registration_number' => 'Registration number',
        'date_of_registration' => 'Date of registration',
        'type' => 'Type Of Organisation',
        'membership_type' => 'Membership type',
        'physical_address' => 'Physical address'
    ];

}