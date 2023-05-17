<?php

namespace App\Admin\Extensions;

use Encore\Admin\Grid\Exporters\AbstractExporter;

class OrganisationsExcelExporter extends AbstractExporter
{
    protected $filename = 'Organisations.xlsx';

    protected $columns = [
        'id' => 'ID',
        'name' => 'Name',
        'registration_number' => 'Registration number',
        'date_of_registration' => 'Date of registration',
        'type' => 'Type Of Organisation',
        'membership_type' => 'Membership type',
        'physical_address' => 'Physical address',
        'contact_persons' => 'Contact persons',
    ];
    
    public function export()
    {
        $filename = 'Organisations-'.date('Y-m-d-H-i-s').'.xlsx';
        $this->download($filename);
    }
}