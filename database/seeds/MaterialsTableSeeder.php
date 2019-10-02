<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialsTableSeeder extends Seeder
{
    /**
     * 재질 색인 테이블 데이터 세팅
     *
     * @return void
     */
    public function run()
    {
        //1 - 면(cotton)
        $materials_ko_1 = ["면", "cotton", "면원단", "코튼", "면소재", "면원단", "목화", "천연섬유", "면직물", "무명", "광목", "10수", "20수", "40수", "60수", "캔버스", "옥스포드"];
        $group = DB::table('groups')->where('name_ko', "면(cotton)")->first();
        for($i = 0; $i < count($materials_ko_1); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_1[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //2 - 마(hemp)
        $materials_ko_2 = ["hemp", "여름옷감", "천연섬유", "고급여름소재"];
        $group = DB::table('groups')->where('name_ko', "마(hemp)")->first();
        for($i = 0; $i < count($materials_ko_2); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_2[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //3 - 린넨(linen)
        $materials_ko_3 = ["리넨", "린넨", "linen", "천연섬유", "시원한소재", "마직물"];
        $group = DB::table('groups')->where('name_ko', "린넨(linen)")->first();
        for($i = 0; $i < count($materials_ko_3); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_3[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //4 - 견(silk)
        $materials_ko_4 = ["silk", "실크", "견실크", "견섬유", "누에고치", "광택", "명주실", "견사"];
        $group = DB::table('groups')->where('name_ko', "견(silk)")->first();
        for($i = 0; $i < count($materials_ko_4); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_4[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //5 - 양모(wool)
        $materials_ko_5 = ["양모", "양털", "wool", "모섬유", "램스울", "모직물", "울", "양모펠트"];
        $group = DB::table('groups')->where('name_ko', "양모(wool)")->first();
        for($i = 0; $i < count($materials_ko_5); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_5[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //6 - 모혜어(mohair)
        $materials_ko_6 = ["염소털", "다이아몬드섬유", "염소털", "광택", "silky", "산양", "보온성", "가볍고부드러워"];
        $group = DB::table('groups')->where('name_ko', "모혜어(mohair)")->first();
        for($i = 0; $i < count($materials_ko_6); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_6[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //7 - 캐시미어(cashmere)
        $materials_ko_7 = ["카슈미르지방", "캐시미어산양", "보온성", "윤기", "고급모직물", "신축성", "캐시미어코트"];
        $group = DB::table('groups')->where('name_ko', "캐시미어(cashmere)")->first();
        for($i = 0; $i < count($materials_ko_7); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_7[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //8 - 앙고라(angora)
        $materials_ko_8 = ["angora", "앙고라", "앙고라염소털", "앙고라토끼"];
        $group = DB::table('groups')->where('name_ko', "앙고라(angora)")->first();
        for($i = 0; $i < count($materials_ko_8); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_8[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //9 - 알파카(alpaca)
        $materials_ko_9 = ["알파카", "alpaca", "수리", "라마", "알파카코트"];
        $group = DB::table('groups')->where('name_ko', "알파카(alpaca)")->first();
        for($i = 0; $i < count($materials_ko_9); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_9[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //10 - 메리노울(merino wool)
        $materials_ko_10 = ["메리노울", "merino", "피부치유 및 개선", "신축성", "회복력"];
        $group = DB::table('groups')->where('name_ko', "메리노울(merino wool)")->first();
        for($i = 0; $i < count($materials_ko_10); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_10[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //11 - 레이온(rayon)
        $materials_ko_11 = ["레이온", "rayon", "인조섬유", "비스코스레이온", "재생셀룰로오스"];
        $group = DB::table('groups')->where('name_ko', "레이온(rayon)")->first();
        for($i = 0; $i < count($materials_ko_11); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_11[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //12 - 텐셀(tencel)
        $materials_ko_12 = ["텐셀", "tencel", "텐셀원단", "유칼립투스나무추출", "친환경소재"];
        $group = DB::table('groups')->where('name_ko', "텐셀(tencel)")->first();
        for($i = 0; $i < count($materials_ko_12); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_12[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //13 - 큐프라(cupra)
        $materials_ko_13 = ["큐프라", "cupra", "큐프라원단"];
        $group = DB::table('groups')->where('name_ko', "큐프라(cupra)")->first();
        for($i = 0; $i < count($materials_ko_13); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_13[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //14 - 폴리에스테르(polyester)
        $materials_ko_14 = ["폴리에스테르", "폴리에스터섬유", "polyester", "좋은내구성", "합성섬유", "인조섬유"];
        $group = DB::table('groups')->where('name_ko', "폴리에스테르(polyester)")->first();
        for($i = 0; $i < count($materials_ko_14); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_14[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //15 - 폴리우레탄(polyurethane)
        $materials_ko_15 = ["폴리우레탄", "polyurethane", "합성섬유", "스판덱스", "섬유의반도체", "탄성섬유"];
        $group = DB::table('groups')->where('name_ko', "폴리우레탄(polyurethane)")->first();
        for($i = 0; $i < count($materials_ko_15); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_15[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //16 - 투웨이스판(사방스판)
        $materials_ko_16 = ["투웨이스판", "사방스판", "스판"];
        $group = DB::table('groups')->where('name_ko', "투웨이스판(사방스판)")->first();
        for($i = 0; $i < count($materials_ko_16); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_16[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //17 - 아세테이트(acetate)
        $materials_ko_17 = ["아세테이트", "acetate", "반합성섬유", "약한 염색견뢰도"];
        $group = DB::table('groups')->where('name_ko', "아세테이트(acetate)")->first();
        for($i = 0; $i < count($materials_ko_17); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_17[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //18 - 나일론(nylon)
        $materials_ko_18 = ["나일론", "nylon", "폴리아미드계 합성섬유", "가장 오래된 합성섬유", "합성수지", "폴리아미드"];
        $group = DB::table('groups')->where('name_ko', "나일론(nylon)")->first();
        for($i = 0; $i < count($materials_ko_18); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_18[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //19 - 탁텔(tactel)
        $materials_ko_19 = ["듀폰사", "고급나일론", "tactel", "스포츠의류", "스타킹", "란제리", "내열성", "흡수성", "흡습성"];
        $group = DB::table('groups')->where('name_ko', "탁텔(tactel)")->first();
        for($i = 0; $i < count($materials_ko_19); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_19[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //20 - 아크릴(acrylic)
        $materials_ko_20 = ["아크릴", "acrylic", "합성섬유"];
        $group = DB::table('groups')->where('name_ko', "아크릴(acrylic)")->first();
        for($i = 0; $i < count($materials_ko_20); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_20[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //21 - 공단(satin)
        $materials_ko_21 = ["공단", "satin", "광택"];
        $group = DB::table('groups')->where('name_ko', "공단(satin)")->first();
        for($i = 0; $i < count($materials_ko_21); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_21[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //22 - T/C
        $materials_ko_22 = ["면폴리혼방", "안감", "주머니감", "쿠션커버", "속지"];
        $group = DB::table('groups')->where('name_ko', "T/C")->first();
        for($i = 0; $i < count($materials_ko_22); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_22[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //23 - 벨벳(velvet)
        $materials_ko_23 = ["벨벳", "velvet", "고급원단"];
        $group = DB::table('groups')->where('name_ko', "벨벳(velvet)")->first();
        for($i = 0; $i < count($materials_ko_23); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_23[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //24 - 저지(Jersey)
        $materials_ko_24 = ["저지", "jersey", "신축성", "메리야스직물"];
        $group = DB::table('groups')->where('name_ko', "저지(Jersey)")->first();
        for($i = 0; $i < count($materials_ko_24); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_24[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //25 - 분또
        $materials_ko_25 = ["분또", "다이마루", "분또소재"];
        $group = DB::table('groups')->where('name_ko', "분또")->first();
        for($i = 0; $i < count($materials_ko_25); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_25[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //26 - 폴라폴리스
        $materials_ko_26 = ["폴라폴리스", "보온성"];
        $group = DB::table('groups')->where('name_ko', "폴라폴리스")->first();
        for($i = 0; $i < count($materials_ko_26); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_26[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //27 - 쉬폰(chiffon)
        $materials_ko_27 = ["쉬폰", "chiffon", "후리스"];
        $group = DB::table('groups')->where('name_ko', "쉬폰(chiffon)")->first();
        for($i = 0; $i < count($materials_ko_27); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_27[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //28 - 지지미
        $materials_ko_28 = ["지지미", "와플이나 세로주름 형태주름 준 원단", "여름소재"];
        $group = DB::table('groups')->where('name_ko', "지지미")->first();
        for($i = 0; $i < count($materials_ko_28); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_28[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //29 - 메모리(Memory)
        $materials_ko_29 = ["메모리", "memory", "형상기억", "폴리에스테르"];
        $group = DB::table('groups')->where('name_ko', "메모리(Memory)")->first();
        for($i = 0; $i < count($materials_ko_29); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_29[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //30 - 프라다
        $materials_ko_30 = ["프라다원단", "폴리아미드", "특수코팅"];
        $group = DB::table('groups')->where('name_ko', "프라다")->first();
        for($i = 0; $i < count($materials_ko_30); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_30[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //31 - 네오프렌(neoprene)
        $materials_ko_31 = ["네오플랜", "네오프렌", "네오플램", "neoprene", "합성고무의 상품명"];
        $group = DB::table('groups')->where('name_ko', "네오프렌(neoprene)")->first();
        for($i = 0; $i < count($materials_ko_31); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_31[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //32 - 멜턴(melton)
        $materials_ko_32 = ["멜턴", "melton", "축융가공"];
        $group = DB::table('groups')->where('name_ko', "멜턴(melton)")->first();
        for($i = 0; $i < count($materials_ko_32); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_32[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //33 - 코듀로이(Corduroy)
        $materials_ko_33 = ["코듀로이", "corduroy", "골덴", "코듀로이 골덴"];
        $group = DB::table('groups')->where('name_ko', "코듀로이(Corduroy)")->first();
        for($i = 0; $i < count($materials_ko_33); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_33[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //34 - 헤링본(herringbone)
        $materials_ko_34 = ["헤링본", "herringbone", "청어의뼈", "클래식"];
        $group = DB::table('groups')->where('name_ko', "헤링본(herringbone)")->first();
        for($i = 0; $i < count($materials_ko_34); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_34[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //35 - 데님(denim)
        $materials_ko_35 = ["데님", "denim", "능직", "블루데님", "데님 청바지", "청바지"];
        $group = DB::table('groups')->where('name_ko', "데님(denim)")->first();
        for($i = 0; $i < count($materials_ko_35); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_35[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //36 - 기모(napping)
        $materials_ko_36 = ["기모", "napping", "감촉 부드럽게 가공", "보온성"];
        $group = DB::table('groups')->where('name_ko', "기모(napping)")->first();
        for($i = 0; $i < count($materials_ko_36); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_36[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //37 - 홈스펀(homespun)
        $materials_ko_37 = ["홈스펀", "homespun", "거친방모직"];
        $group = DB::table('groups')->where('name_ko', "홈스펀(homespun)")->first();
        for($i = 0; $i < count($materials_ko_37); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_37[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //38 - 트위드(tweed)
        $materials_ko_38 = ["트위드", "tweed", "트위드자켓", "트위드원피스"];
        $group = DB::table('groups')->where('name_ko', "트위드(tweed)")->first();
        for($i = 0; $i < count($materials_ko_38); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_38[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //39 - 펠트(felt)
        $materials_ko_39 = ["펠트", "felt", "펠트모자", "펠트코트"];
        $group = DB::table('groups')->where('name_ko', "펠트(felt)")->first();
        for($i = 0; $i < count($materials_ko_39); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_39[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //40 - 태피터(Taffeta)
        $materials_ko_40 = ["태피터", "taffeta", "평직 견직물", "페미닌", "드레시"];
        $group = DB::table('groups')->where('name_ko', "태피터(Taffeta)")->first();
        for($i = 0; $i < count($materials_ko_40); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_40[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //41 - 멜란지(melange)
        $materials_ko_41 = ["멜란지", "melange", "멜란지 소재", "멜라지 컬러"];
        $group = DB::table('groups')->where('name_ko', "멜란지(melange)")->first();
        for($i = 0; $i < count($materials_ko_41); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_41[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //42 - 옥스퍼드(oxford)
        $materials_ko_42 = ["옥스퍼드", "oxford", "평직", "바스켓직"];
        $group = DB::table('groups')->where('name_ko', "옥스퍼드(oxford)")->first();
        for($i = 0; $i < count($materials_ko_42); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_42[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //43 - 자카드(Jacquard)
        $materials_ko_43 = ["자카드", "jacquard", "자가드"];
        $group = DB::table('groups')->where('name_ko', "자카드(Jacquard)")->first();
        for($i = 0; $i < count($materials_ko_43); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_43[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //44 - 메탈릭사
        $materials_ko_44 = ["메탈릭사", "메탈릭"];
        $group = DB::table('groups')->where('name_ko', "메탈릭사")->first();
        for($i = 0; $i < count($materials_ko_44); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_44[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //45 - 실켓(Silket)
        $materials_ko_45 = ["실켓가공", "silket", "머서라이즈가공"];
        $group = DB::table('groups')->where('name_ko', "실켓(Silket)")->first();
        for($i = 0; $i < count($materials_ko_45); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_45[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //46 - 양면
        $materials_ko_46 = ["양면", "양면원단", "리버서블", "리버시블"];
        $group = DB::table('groups')->where('name_ko', "양면")->first();
        for($i = 0; $i < count($materials_ko_46); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_46[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //47 - 선염지
        $materials_ko_47 = ["선염", "선염지"];
        $group = DB::table('groups')->where('name_ko', "선염지")->first();
        for($i = 0; $i < count($materials_ko_47); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_47[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //48 - 오간자(oganza)
        $materials_ko_48 = ["오간자", "oganza", "필라멘트로 만든 평직 옷감"];
        $group = DB::table('groups')->where('name_ko', "오간자(oganza)")->first();
        for($i = 0; $i < count($materials_ko_48); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_48[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //49 - Peach 가공
        $materials_ko_49 = ["피치가공", "peach가공"];
        $group = DB::table('groups')->where('name_ko', "Peach 가공")->first();
        for($i = 0; $i < count($materials_ko_49); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_49[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //50 - 시보리
        $materials_ko_50 = ["시보리", "소매 시보리", "티셔츠 원단"];
        $group = DB::table('groups')->where('name_ko', "시보리")->first();
        for($i = 0; $i < count($materials_ko_50); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_50[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //51 - 충전재
        $materials_ko_51 = ["충전재", "오리털", "거위털", "화학솜"];
        $group = DB::table('groups')->where('name_ko', "충전재")->first();
        for($i = 0; $i < count($materials_ko_51); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_51[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //52 - 패딩(padding)
        $materials_ko_52 = ["패딩", "padding", "충전재", "겨울패딩", "롱패딩"];
        $group = DB::table('groups')->where('name_ko', "패딩(padding)")->first();
        for($i = 0; $i < count($materials_ko_52); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_52[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //53 - 웰론
        $materials_ko_53 = ["웰론", "인조오리털", "wellon"];
        $group = DB::table('groups')->where('name_ko', "웰론")->first();
        for($i = 0; $i < count($materials_ko_53); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_53[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //54 - 덕다운(duck down)
        $materials_ko_54 = ["덕다운", "오리털", "duck down"];
        $group = DB::table('groups')->where('name_ko', "덕다운(duck down)")->first();
        for($i = 0; $i < count($materials_ko_54); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_54[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //55 - 구스다운(Goose down)
        $materials_ko_55 = ["구스다운", "거위털", "goose down"];
        $group = DB::table('groups')->where('name_ko', "구스다운(Goose down)")->first();
        for($i = 0; $i < count($materials_ko_55); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_55[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //56 - 양가죽
        $materials_ko_56 = ["양가죽", "램스킨", "램나빠", "양가죽자켓"];
        $group = DB::table('groups')->where('name_ko', "양가죽")->first();
        for($i = 0; $i < count($materials_ko_56); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_56[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //57 - 소가죽
        $materials_ko_57 = ["소가죽", "우피", "천연소가죽"];
        $group = DB::table('groups')->where('name_ko', "소가죽")->first();
        for($i = 0; $i < count($materials_ko_57); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_57[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //58 - 돼지가죽
        $materials_ko_58 = ["돼지가죽", "돈피"];
        $group = DB::table('groups')->where('name_ko', "돼지가죽")->first();
        for($i = 0; $i < count($materials_ko_58); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_58[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //59 - 나빠(nappa)
        $materials_ko_59 = ["나빠", "nappa", "leather"];
        $group = DB::table('groups')->where('name_ko', "나빠(nappa)")->first();
        for($i = 0; $i < count($materials_ko_59); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_59[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //60 - 세무(suede)
        $materials_ko_60 = ["세무", "suede", "스웨이드", "쎄무"];
        $group = DB::table('groups')->where('name_ko', "세무(suede)")->first();
        for($i = 0; $i < count($materials_ko_60); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_60[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //61 - 누벅(nubuck)
        $materials_ko_61 = ["누벅", "nubuck", "누벅가죽"];
        $group = DB::table('groups')->where('name_ko', "누벅(nubuck)")->first();
        for($i = 0; $i < count($materials_ko_61); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_61[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //62 - 무스탕(mustang)
        $materials_ko_62 = ["무스탕", "mustang", "양털무스탕", "양가죽무스탕"];
        $group = DB::table('groups')->where('name_ko', "무스탕(mustang)")->first();
        for($i = 0; $i < count($materials_ko_62); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_62[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //63 - 토스카나(toscana)
        $materials_ko_63 = ["토스카나", "toscana", "무스탕", "천연양털"];
        $group = DB::table('groups')->where('name_ko', "토스카나(toscana)")->first();
        for($i = 0; $i < count($materials_ko_63); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_63[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //64 - 밍크(mink)
        $materials_ko_64 = ["밍크", "mink", "밍크코트", "밍크자켓"];
        $group = DB::table('groups')->where('name_ko', "밍크(mink)")->first();
        for($i = 0; $i < count($materials_ko_64); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_64[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //65 - 여우(fox)
        $materials_ko_65 = ["여우", "여우털", "fox 폭스털"];
        $group = DB::table('groups')->where('name_ko', "여우(fox)")->first();
        for($i = 0; $i < count($materials_ko_65); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_65[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //66 - 실버폭스(silver fox)
        $materials_ko_66 = ["실버폭스", "silver fox", "실버폭스 롱패딩"];
        $group = DB::table('groups')->where('name_ko', "실버폭스(silver fox)")->first();
        for($i = 0; $i < count($materials_ko_66); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_66[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //67 - 블루폭스(blue fox)
        $materials_ko_67 = ["블루폭스", "blue fox"];
        $group = DB::table('groups')->where('name_ko', "블루폭스(blue fox)")->first();
        for($i = 0; $i < count($materials_ko_67); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_67[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //68 - 레드폭스(red fox)
        $materials_ko_68 = ["레드폭스", "red fox", "여우털"];
        $group = DB::table('groups')->where('name_ko', "레드폭스(red fox)")->first();
        for($i = 0; $i < count($materials_ko_68); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_68[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //69 - 너구리(raccon)
        $materials_ko_69 = ["너구리", "raccon", "락쿤털", "라쿤트리밍 롱패딩"];
        $group = DB::table('groups')->where('name_ko', "너구리(raccon)")->first();
        for($i = 0; $i < count($materials_ko_69); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_69[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //70 - 단비(sable)
        $materials_ko_70 = ["단비", "sable", "세이블"];
        $group = DB::table('groups')->where('name_ko', "단비(sable)")->first();
        for($i = 0; $i < count($materials_ko_70); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_70[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //71 - 머스커랫(muskrat)
        $materials_ko_71 = ["머스커랫", "muskrat", "머스커랫털"];
        $group = DB::table('groups')->where('name_ko', "머스커랫(muskrat)")->first();
        for($i = 0; $i < count($materials_ko_71); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_71[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //72 - 다람쥐(squirrel)
        $materials_ko_72 = ["다람쥐", "squirrel", "다람쥐털"];
        $group = DB::table('groups')->where('name_ko', "다람쥐(squirrel)")->first();
        for($i = 0; $i < count($materials_ko_72); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_72[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //73 - 친칠라(chinchilla)
        $materials_ko_73 = ["친칠라", "chinchilla", "고급털"];
        $group = DB::table('groups')->where('name_ko', "친칠라(chinchilla)")->first();
        for($i = 0; $i < count($materials_ko_73); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_73[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //74 - 토끼(rabbit)
        $materials_ko_74 = ["토끼", "rabbit", "토끼털"];
        $group = DB::table('groups')->where('name_ko', "토끼(rabbit)")->first();
        for($i = 0; $i < count($materials_ko_74); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_74[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
        //75 - 누트리아(nutria)
        $materials_ko_75 = ["누트리아", "nutria"];
        $group = DB::table('groups')->where('name_ko', "누트리아(nutria)")->first();
        for($i = 0; $i < count($materials_ko_75); $i++) {
            DB::table('materials')->insert([
                'group_id' => $group->id,
                'name' => $materials_ko_75[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
