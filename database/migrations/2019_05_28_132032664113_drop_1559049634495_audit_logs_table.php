<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1559049634495AuditLogsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('audit_logs');
    }
}
