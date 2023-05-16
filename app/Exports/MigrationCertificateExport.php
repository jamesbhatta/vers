<?php

namespace App\Exports;

use App\MigrationCertificate;
use Maatwebsite\Excel\Concerns\FromCollection;

class MigrationCertificateExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function collection()
    {
        $migrationCertificates = new MigrationCertificate();

        if ($this->request->reg_number) {
            $migrationCertificates = $migrationCertificates->where('reg_number', $this->request->reg_number);
        }

        if ($this->request->entry_date) {
            $migrationCertificates = $migrationCertificates->where('entry_date', 'like', '%' . $this->request->entry_date . '%');
        }
        if ($this->request->user_id) {
            $migrationCertificates = $migrationCertificates->where('user_id', $this->request->user_id);
        }
        if ($this->request->migration_date) {
            $migrationCertificates = $migrationCertificates->where('migration_date', 'like', '%' . $this->request->migration_date . '%');
        }
        if ($this->request->user_id) {
            $migrationCertificates = $migrationCertificates->where('user_id', $this->request->user_id);
        }
        if ($this->request->book_id) {
            $migrationCertificates = $migrationCertificates->where('book_id', $this->request->book_id);
        }

        if ($this->request->from) {
            if ($this->request->to) {
                $migrationCertificates = $migrationCertificates->whereBetween('entry_date', [date($this->request->from), date($this->request->to)]);
                // Reservation::->get();
            } else {
                $migrationCertificates = $migrationCertificates->where('entry_date', $this->request->from);
            }
        }

        $migrationCertificates = $migrationCertificates->orderBy('id', 'desc')->get();
        return $migrationCertificates;
    }
}
