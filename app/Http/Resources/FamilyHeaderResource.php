<?php

namespace App\Http\Resources;

use DateTime;
use Carbon\Carbon;
use App\Models\FamilyMember;
use Illuminate\Http\Request;
use App\Models\MutualCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Resources\Json\JsonResource;

class FamilyHeaderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $dob = new DateTime($this->dateOfBirth);
        $ageInterval = now()->diff($dob);
        $age = $ageInterval->y;

        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'national_id' => $this->national_id,
            'phone' => $this->phone,
            'image' => $this->image,
            'matialStatus' => $this->matialStatus,
            'category' => MutualCategory::find($this->mutual_category)->name,
            'members' => FamilyMember::where('family_header_id', $this->id)->count(),
            'gender' => ($this->gender == 'male') ? 'Male' : 'Female',
            'dateOfBirth' => Carbon::parse($this->dateOfBirth)->format('M d, Y'),
            'age' => $age,
            'district' => DB::table('rwanda_addresses')->where('dist_id',$this->district)->first()->district,
            'sector' => DB::table('rwanda_addresses')->where('sect_id',$this->sector)->first()->sector,
            'cell' => DB::table('rwanda_addresses')->where('cell_id',$this->cell)->first()->sector,
            'village' => DB::table('rwanda_addresses')->where('vill_id',$this->village)->first()->village,
        ];
    }
}
