<?php

namespace Coderflex\LaravelTicket\Database\Factories;

use App\Models\Enums\HelpdeskTicketPriorityEnum;
use App\Models\Enums\HelpdeskTicketStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('helpdesk_tickets', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->foreignId('assigned_to')->nullable()->references('id')->on('users');
            $table->foreignId('user_id');
            $table->foreignId('company_id');
            $table->string('title');
            $table->string('message')->nullable();
            $table->string('priority')->default(HelpdeskTicketPriorityEnum::LOW->value);
            $table->string('status')->default(HelpdeskTicketStatusEnum::PENDING->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('helpdesk_tickets');
    }
};
