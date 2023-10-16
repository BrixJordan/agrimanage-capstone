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
        $classification = $request->input('classification'); // Added classification

        // Define the kgs based on classification
        $kgsPerHectare = ($classification === 'inbred') ? 40 : 15;

        // Check if $selectedFarmerIds is an array
        if (is_array($selectedFarmerIds)) {
            // Create vouchers for each selected farmer and the selected stock
            foreach ($selectedFarmerIds as $farmerId) {
                // Generate a unique code using the farmer's ID and a random string
                $uniqueCode = 'F' . $farmerId . '-' . Str::random(6); // Example: F1-abc123
                
                // Fetch the farmer's data
                $farmer = Farmers::find($farmerId);
                
                // Calculate the kgs based on total farm area
                $kgs = $farmer->total_farm_area * $kgsPerHectare;

                Voucher::create([
                    'farmer_id' => $farmerId,
                    'stock_id' => $selectedStockId,
                    'date_generated' => now(),
                    'code' => $uniqueCode,
                    'received_stock' => $kgs,
                ]);
            }

            // Redirect to a success page and pass the generated vouchers
            $vouchers = Voucher::whereIn('farmer_id', $selectedFarmerIds)
                ->where('stock_id', $selectedStockId)
                ->get();

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
