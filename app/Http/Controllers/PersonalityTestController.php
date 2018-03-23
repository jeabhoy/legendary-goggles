<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonalityTest;
use App\PersonalityTest;
use App\Section1PersonalityTest;
use App\Section2PersonalityTest;
use App\Section3PersonalityTest;
use App\Section4PersonalityTest;
use App\User;
use Illuminate\Http\Request;

class PersonalityTestController extends Controller
{
    public function create($id)
    {
        $user = (new User)->find($id);
        return view('admin.createStudent.createPersonalityTest', compact('user'));
    }

    public function store(StorePersonalityTest $request, $id)
    {
        $section1PersonalityTest = new Section1PersonalityTest;
        $section1PersonalityTest->row1 = $request->section1Row1;
        $section1PersonalityTest->row2 = $request->section1Row2;
        $section1PersonalityTest->row3 = $request->section1Row3;
        $section1PersonalityTest->row4 = $request->section1Row4;
        $section1PersonalityTest->row5 = $request->section1Row5;
        $section1PersonalityTest->row6 = $request->section1Row6;
        $section1PersonalityTest->row7 = $request->section1Row7;
        $section1PersonalityTest->row8 = $request->section1Row8;
        $section1PersonalityTest->row9 = $request->section1Row9;
        $section1PersonalityTest->row10 = $request->section1Row10;
        $section1PersonalityTest->row11 = $request->section1Row11;
        $section1PersonalityTest->row12 = $request->section1Row12;
        $section1PersonalityTest->row13 = $request->section1Row13;
        $section1PersonalityTest->row14 = $request->section1Row14;
        $section1PersonalityTest->row15 = $request->section1Row15;
        $section1PersonalityTest->row16 = $request->section1Row16;
        $section1PersonalityTest->row17 = $request->section1Row17;
        $section1PersonalityTest->row18 = $request->section1Row18;
        $section1PersonalityTest->row19 = $request->section1Row19;
        $section1PersonalityTest->row20 = $request->section1Row20;
        $section1PersonalityTest->row21 = $request->section1Row21;
        $section1PersonalityTest->row22 = $request->section1Row22;
        $section1PersonalityTest->row23 = $request->section1Row23;
        $section1PersonalityTest->row24 = $request->section1Row24;
        $section1PersonalityTest->row25 = $request->section1Row25;
        $section1PersonalityTest->row26 = $request->section1Row26;
        $section1PersonalityTest->row27 = $request->section1Row27;
        $section1PersonalityTest->row28 = $request->section1Row28;
        $section1PersonalityTest->row29 = $request->section1Row29;
        $section1PersonalityTest->row30 = $request->section1Row30;
        $section1PersonalityTest->save();

        $section2PersonalityTest = new Section2PersonalityTest;
        $section2PersonalityTest->row1 = $request->section2Row1;
        $section2PersonalityTest->row2 = $request->section2Row2;
        $section2PersonalityTest->row3 = $request->section2Row3;
        $section2PersonalityTest->row4 = $request->section2Row4;
        $section2PersonalityTest->row5 = $request->section2Row5;
        $section2PersonalityTest->row6 = $request->section2Row6;
        $section2PersonalityTest->row7 = $request->section2Row7;
        $section2PersonalityTest->row8 = $request->section2Row8;
        $section2PersonalityTest->row9 = $request->section2Row9;
        $section2PersonalityTest->row10 = $request->section2Row10;
        $section2PersonalityTest->row11 = $request->section2Row11;
        $section2PersonalityTest->row12 = $request->section2Row12;
        $section2PersonalityTest->row13 = $request->section2Row13;
        $section2PersonalityTest->row14 = $request->section2Row14;
        $section2PersonalityTest->row15 = $request->section2Row15;
        $section2PersonalityTest->row16 = $request->section2Row16;
        $section2PersonalityTest->row17 = $request->section2Row17;
        $section2PersonalityTest->row18 = $request->section2Row18;
        $section2PersonalityTest->row19 = $request->section2Row19;
        $section2PersonalityTest->row20 = $request->section2Row20;
        $section2PersonalityTest->row21 = $request->section2Row21;
        $section2PersonalityTest->row22 = $request->section2Row22;
        $section2PersonalityTest->row23 = $request->section2Row23;
        $section2PersonalityTest->row24 = $request->section2Row24;
        $section2PersonalityTest->row25 = $request->section2Row25;
        $section2PersonalityTest->row26 = $request->section2Row26;
        $section2PersonalityTest->row27 = $request->section2Row27;
        $section2PersonalityTest->row28 = $request->section2Row28;
        $section2PersonalityTest->row29 = $request->section2Row29;
        $section2PersonalityTest->row30 = $request->section2Row30;
        $section2PersonalityTest->save();

        $section3PersonalityTest = new Section3PersonalityTest;
        $section3PersonalityTest->row1 = $request->section3Row1;
        $section3PersonalityTest->row2 = $request->section3Row2;
        $section3PersonalityTest->row3 = $request->section3Row3;
        $section3PersonalityTest->row4 = $request->section3Row4;
        $section3PersonalityTest->row5 = $request->section3Row5;
        $section3PersonalityTest->row6 = $request->section3Row6;
        $section3PersonalityTest->row7 = $request->section3Row7;
        $section3PersonalityTest->row8 = $request->section3Row8;
        $section3PersonalityTest->row9 = $request->section3Row9;
        $section3PersonalityTest->row10 = $request->section3Row10;
        $section3PersonalityTest->row11 = $request->section3Row11;
        $section3PersonalityTest->row12 = $request->section3Row12;
        $section3PersonalityTest->row13 = $request->section3Row13;
        $section3PersonalityTest->row14 = $request->section3Row14;
        $section3PersonalityTest->row15 = $request->section3Row15;
        $section3PersonalityTest->row16 = $request->section3Row16;
        $section3PersonalityTest->row17 = $request->section3Row17;
        $section3PersonalityTest->row18 = $request->section3Row18;
        $section3PersonalityTest->row19 = $request->section3Row19;
        $section3PersonalityTest->row20 = $request->section3Row20;
        $section3PersonalityTest->row21 = $request->section3Row21;
        $section3PersonalityTest->row22 = $request->section3Row22;
        $section3PersonalityTest->row23 = $request->section3Row23;
        $section3PersonalityTest->row24 = $request->section3Row24;
        $section3PersonalityTest->row25 = $request->section3Row25;
        $section3PersonalityTest->row26 = $request->section3Row26;
        $section3PersonalityTest->row27 = $request->section3Row27;
        $section3PersonalityTest->row28 = $request->section3Row28;
        $section3PersonalityTest->row29 = $request->section3Row29;
        $section3PersonalityTest->row30 = $request->section3Row30;
        $section3PersonalityTest->save();

        $section4PersonalityTest = new Section4PersonalityTest;
        $section4PersonalityTest->row1 = $request->section4Row1;
        $section4PersonalityTest->row2 = $request->section4Row2;
        $section4PersonalityTest->row3 = $request->section4Row3;
        $section4PersonalityTest->row4 = $request->section4Row4;
        $section4PersonalityTest->row5 = $request->section4Row5;
        $section4PersonalityTest->row6 = $request->section4Row6;
        $section4PersonalityTest->row7 = $request->section4Row7;
        $section4PersonalityTest->row8 = $request->section4Row8;
        $section4PersonalityTest->row9 = $request->section4Row9;
        $section4PersonalityTest->row10 = $request->section4Row10;
        $section4PersonalityTest->row11 = $request->section4Row11;
        $section4PersonalityTest->row12 = $request->section4Row12;
        $section4PersonalityTest->row13 = $request->section4Row13;
        $section4PersonalityTest->row14 = $request->section4Row14;
        $section4PersonalityTest->row15 = $request->section4Row15;
        $section4PersonalityTest->row16 = $request->section4Row16;
        $section4PersonalityTest->row17 = $request->section4Row17;
        $section4PersonalityTest->row18 = $request->section4Row18;
        $section4PersonalityTest->row19 = $request->section4Row19;
        $section4PersonalityTest->row20 = $request->section4Row20;
        $section4PersonalityTest->row21 = $request->section4Row21;
        $section4PersonalityTest->row22 = $request->section4Row22;
        $section4PersonalityTest->row23 = $request->section4Row23;
        $section4PersonalityTest->row24 = $request->section4Row24;
        $section4PersonalityTest->row25 = $request->section4Row25;
        $section4PersonalityTest->row26 = $request->section4Row26;
        $section4PersonalityTest->row27 = $request->section4Row27;
        $section4PersonalityTest->row28 = $request->section4Row28;
        $section4PersonalityTest->row29 = $request->section4Row29;
        $section4PersonalityTest->row30 = $request->section4Row30;
        $section4PersonalityTest->save();

        $personalityTestSection1Total = $request->section1Row1 + $request->section1Row2 + $request->section1Row3 + $request->section1Row4 + $request->section1Row5 + $request->section1Row6 + $request->section1Row7 + $request->section1Row8 + $request->section1Row9 + $request->section1Row10 + $request->section1Row11 + $request->section1Row12 + $request->section1Row13 + $request->section1Row14 + $request->section1Row15 + $request->section1Row16 + $request->section1Row17 + $request->section1Row18 + $request->section1Row19 + $request->section1Row20 + $request->section1Row21 + $request->section1Row22 + $request->section1Row23 + $request->section1Row24 + $request->section1Row25 + $request->section1Row26 + $request->section1Row27 + $request->section1Row28 + $request->section1Row29 + $request->section1Row30;

        $personalityTestSection2Total = $request->section2Row1 + $request->section2Row2 + $request->section2Row3 + $request->section2Row4 + $request->section2Row5 + $request->section2Row6 + $request->section2Row7 + $request->section2Row8 + $request->section2Row9 + $request->section2Row10 + $request->section2Row11 + $request->section2Row12 + $request->section2Row13 + $request->section2Row14 + $request->section2Row15 + $request->section2Row16 + $request->section2Row17 + $request->section2Row18 + $request->section2Row19 + $request->section2Row20 + $request->section2Row21 + $request->section2Row22 + $request->section2Row23 + $request->section2Row24 + $request->section2Row25 + $request->section2Row26 + $request->section2Row27 + $request->section2Row28 + $request->section2Row29 + $request->section2Row30;

        $personalityTestSection3Total = $request->section3Row1 + $request->section3Row2 + $request->section3Row3 + $request->section3Row4 + $request->section3Row5 + $request->section3Row6 + $request->section3Row7 + $request->section3Row8 + $request->section3Row9 + $request->section3Row10 + $request->section3Row11 + $request->section3Row12 + $request->section3Row13 + $request->section3Row14 + $request->section3Row15 + $request->section3Row16 + $request->section3Row17 + $request->section3Row18 + $request->section3Row19 + $request->section3Row20 + $request->section3Row21 + $request->section3Row22 + $request->section3Row23 + $request->section3Row24 + $request->section3Row25 + $request->section3Row26 + $request->section3Row27 + $request->section3Row28 + $request->section3Row29 + $request->section3Row30;

        $personalityTestSection4Total = $request->section4Row1 + $request->section4Row2 + $request->section4Row3 + $request->section4Row4 + $request->section4Row5 + $request->section4Row6 + $request->section4Row7 + $request->section4Row8 + $request->section4Row9 + $request->section4Row10 + $request->section4Row11 + $request->section4Row12 + $request->section4Row13 + $request->section4Row14 + $request->section4Row15 + $request->section4Row16 + $request->section4Row17 + $request->section4Row18 + $request->section4Row19 + $request->section4Row20 + $request->section4Row21 + $request->section4Row22 + $request->section4Row23 + $request->section4Row24 + $request->section4Row25 + $request->section4Row26 + $request->section4Row27 + $request->section4Row28 + $request->section4Row29 + $request->section4Row30;

        $personalityTest = new PersonalityTest;
        $personalityTest->user_id = $id;
        $personalityTest->section1PersonalityTest = $personalityTestSection1Total;
        $personalityTest->section2PersonalityTest = $personalityTestSection2Total;
        $personalityTest->section3PersonalityTest = $personalityTestSection3Total;
        $personalityTest->section4PersonalityTest = $personalityTestSection4Total;

        if ($personalityTestSection1Total >= $personalityTestSection2Total && $personalityTestSection1Total >= $personalityTestSection3Total && $personalityTestSection1Total >= $personalityTestSection4Total)
        {
            if ( $personalityTestSection2Total >= $personalityTestSection3Total && $personalityTestSection2Total >= $personalityTestSection4Total)
            {
                $personalityTest->personality = 'SanChlor';
            }

            elseif ($personalityTestSection3Total >= $personalityTestSection2Total && $personalityTestSection3Total >= $personalityTestSection4Total)
            {
                $personalityTest->personality = 'SanMel';
            }
            else
            {
                $personalityTest->personality = 'SanPhleg';
            }
        }
        elseif ($personalityTestSection2Total >= $personalityTestSection1Total && $personalityTestSection2Total >= $personalityTestSection3Total && $personalityTestSection2Total >= $personalityTestSection4Total)
        {
            if ( $personalityTestSection1Total >= $personalityTestSection3Total && $personalityTestSection1Total >= $personalityTestSection4Total)
            {
                $personalityTest->personality = 'ChlorSan';
            }

            elseif ($personalityTestSection3Total >= $personalityTestSection1Total && $personalityTestSection3Total >= $personalityTestSection4Total)
            {
                $personalityTest->personality = 'ChlorMel';
            }
            else
            {
                $personalityTest->personality = 'ChlorPhleg';
            }
        }
        elseif ($personalityTestSection3Total >= $personalityTestSection1Total && $personalityTestSection3Total >= $personalityTestSection2Total && $personalityTestSection3Total >= $personalityTestSection4Total)
        {
            if ( $personalityTestSection1Total >= $personalityTestSection2Total && $personalityTestSection1Total >= $personalityTestSection4Total)
            {
                $personalityTest->personality = 'MelSan';
            }

            elseif ($personalityTestSection2Total >= $personalityTestSection1Total && $personalityTestSection2Total >= $personalityTestSection4Total)
            {
                $personalityTest->personality = 'MelChlor';
            }
            else
            {
                $personalityTest->personality = 'MelPhleg';
            }
        }
        else
        {
            if ( $personalityTestSection1Total >= $personalityTestSection2Total && $personalityTestSection1Total >= $personalityTestSection3Total)
            {
                $personalityTest->personality = 'PhlegSan';
            }

            elseif ($personalityTestSection2Total >= $personalityTestSection1Total && $personalityTestSection2Total >= $personalityTestSection3Total)
            {
                $personalityTest->personality = 'PhlegChlor';
            }
            else
            {
                $personalityTest->personality = 'PhlegMel';
            }
        }
        $personalityTest->save();
        $user = (new User)->find($id);
        if ($user->level == 'College' && $user->exitInterviewTaken == 'false')
        {
            return redirect()->route('adminCreateStudentExitInterview', ['id' => $id]);
        }
        $user->cummulativeRecordTaken = 'true';
        $user->save();
        return redirect()->route('adminManageStudentIndex')->with('status', 'Record Successfully added!');
    }
}
