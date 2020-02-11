<?php
namespace WeDevs\ERP\HRM\Models;

use WeDevs\ERP\Framework\Model;

/**
 * Class Leave_Approval_Status
 *
 * @package WeDevs\ERP\HRM\Models
 */
class Leave_Approval_Status extends Model {
    protected $table = 'erp_hr_leave_approval_status';

    protected $fillable = [
        'leave_request_id', 'approval_status_id', 'approved_by',
        'approved_date', 'forward_to', 'message'
    ];

    /**
     * Relation to Leave_Entitlement model
     *
     * @since 1.5.15
     *
     * @return object
     */
    public function entitlements() {
        return $this->hasMany( 'WeDevs\ERP\HRM\Models\Leave_Entitlement', 'trn_id' );
    }

    /**
     * Relation to Leave_Request_Detail model
     *
     * @since 1.5.15
     *
     * @return object
     */
    public function details() {
        return $this->hasMany( 'WeDevs\ERP\HRM\Models\Leave_Request_Detail', 'leave_request_id', 'leave_request_id' );
    }

    /**
     * Relation to Leave_Request model
     *
     * @since 1.5.15
     *
     * @return object
     */
    public function leave_request() {
        return $this->belongsTo( 'WeDevs\ERP\HRM\Models\Leave_Request' );
    }

    /**
     * Relation to Leaves_Unpaid model
     *
     * @since 1.5.15
     *
     * @return object
     */
    public function unpaids() {
        return $this->hasMany( 'WeDevs\ERP\HRM\Models\Leaves_Unpaid', 'leave_request_id', 'leave_request_id' );
    }
}