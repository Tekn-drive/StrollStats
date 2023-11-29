<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function openVoucherMenu()
    {
        $user = auth()->user();
        $player = $user->player;
        $totalSteps = $user->totalSteps();

        $voucherMilestones = [
            'A' => 100000,
            'B' => 500000,
            'C' => 1000000,
            'D' => 5000000,
        ];

        foreach ($voucherMilestones as $type => $milestone) {
            if ($totalSteps >= $milestone && !$user->vouchers->contains('voucher_type', $type)) {
                $user->vouchers()->create(['voucher_type' => $type]);
            }
        }

        $vouchers = $user->vouchers;
        return view('reward', compact('vouchers', 'user', 'player', 'voucherMilestones'));
    }
}
