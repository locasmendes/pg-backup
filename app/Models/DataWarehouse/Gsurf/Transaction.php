<?php

namespace App\Models\DataWarehouse\Gsurf;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'gsurf_transactions';

    protected $fillable = [
        'id',
        'date',
        'nsu_sitef',
        'merchant_code_sitef',
        'merchant_code_subacquirer',
        'response_code',
        'authorization_code',
        'fiscal_coupon',
        'installments_number',
        'terminal_number',
        'channel',
        'nsu_host',
        'entry_mode',
        'logic_number',
        'fiscal_date',
        'customer_id',
        'import_date',
        'type',
        'transaction_date',
        'reconciliation_status',
        'export_date',
        'original_authorization_code',
        'original_installments_number',
        'order_id',
        'merchant_usn',
        'nit',
        'gsetef_merchant_id',
        'uuid',
        'reconciliation_nsu',
        'reconciliation_date',
        'dynamic_data',
        'split_data',
        'original_transaction_usn',
        'status_id',
        'status_description',
        'original_status_id',
        'original_status_description',
        'transaction_type_id',
        'transaction_type_description',
        'card_brand_id',
        'card_brand_description',
        'acquirer_id',
        'acquirer_description',
        'category_id',
        'category_description',
        'status_category_id',
        'status_category_description',
        'sale_type_id',
        'sale_type_description',
        'amount',
        'amount_currency',
        'original_amount',
        'original_amount_currency',
        'response_code_detailing_category',
        'response_code_detailing_reason',
        'response_code_detailing_note',
        'antifraud_data_code',
        'antifraud_data_reviewer_comments',
        'antifraud_data_category',
        'antifraud_data_reason',
        'antifraud_data_note'
    ];

    protected $casts = [
        'id' => 'integer',
        'date' => 'datetime',
        'installments_number' => 'integer',
        'fiscal_date' => 'datetime',
        'import_date' => 'datetime',
        'transaction_date' => 'date',
        'reconciliation_status' => 'integer',
        'export_date' => 'datetime',
        'original_installments_number' => 'integer',
        'reconciliation_date' => 'datetime',
        'status_id' => 'integer',
        'original_status_id' => 'integer',
        'transaction_type_id' => 'integer',
        'card_brand_id' => 'integer',
        'acquirer_id' => 'integer',
        'category_id' => 'integer',
        'status_category_id' => 'integer',
        'sale_type_id' => 'integer',
        'amount' => 'integer',
        'original_amount' => 'integer',
        'response_code_detailing' => 'array',
        'antifraud_data' => 'array',
    ];

    public $incrementing = false;
    protected $keyType = 'bigInteger';
}