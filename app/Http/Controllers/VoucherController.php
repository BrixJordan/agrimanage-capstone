<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use App\Models\Farmers;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VoucherController extends Controller
{
    public function generateVoucher(Request $request)
{
    // Get the selected farmer IDs and the selected stock ID from the form
    $selectedFarmerIds = $request->input('ids');
    $selectedStockId = $request->input('stock_id');
    $classification = $request->input('classification');

    // Check if $selectedFarmerIds is an array
    if (is_array($selectedFarmerIds)) {
        // Fetch all selected farmers' data in one query for efficiency
        $farmers = Farmers::whereIn('id', $selectedFarmerIds)->get();

        // Create an array to store the vouchers
        $vouchers = [];

        foreach ($farmers as $farmer) {
            // Generate a unique code using the farmer's ID and a random string
            $uniqueCode = 'F' . $farmer->id . '-' . Str::random(6); // Example: F1-abc123

            // Calculate the received stock based on classification and farmer's total farm area
            $totalFarmArea = $farmer->total_farm_area;
            $receivedStock = ($classification === 'inbred') ? 2 * $totalFarmArea : $totalFarmArea;

            // Prepare the voucher data
            $voucherData = [
                'farmer_id' => $farmer->id,
                'stock_id' => $selectedStockId,
                'date_generated' => now(),
                'code' => $uniqueCode,
                'received_stock' => $receivedStock,
            ];

            // Create the voucher and store it in the array
            $vouchers[] = Voucher::create($voucherData);
        }

        // Redirect to a success page and pass the generated vouchers
        return view('vouchers.show', compact('vouchers'));
    } else {
        // Handle the case where $selectedFarmerIds is not an array
        return redirect()->back()->with('error', 'Please select farmers and a stock.');
    }
}



    




    public function voucherHistory()
    {
        $vouchers = Voucher::orderBy('date_generated', 'desc')->get();

        return view('vouchers.history', compact('vouchers'));
    }
}
