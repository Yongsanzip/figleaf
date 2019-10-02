<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsTableSeeder extends Seeder
{
    /**
     * 재질 그룹명 테이블 데이터 세팅
     *
     * @return void
     */
    public function run()
    {
        $groups_ko = [
            "면(cotton)", "마(hemp)", "린넨(linen)", "견(silk)", "양모(wool)", "모혜어(mohair)", "캐시미어(cashmere)", "앙고라(angora)", "알파카(alpaca)", "메리노울(merino wool)",
            "레이온(rayon)", "텐셀(tencel)", "큐프라(cupra)", "폴리에스테르(polyester)", "폴리우레탄(polyurethane)", "투웨이스판(사방스판)", "아세테이트(acetate)", "나일론(nylon)", "탁텔(tactel)", "아크릴(acrylic)",
            "공단(satin)", "T/C", "벨벳(velvet)", "저지(Jersey)", "분또", "폴라폴리스", "쉬폰(chiffon)", "지지미", "메모리(Memory)", "프라다",
            "네오프렌(neoprene)", "멜턴(melton)", "코듀로이(Corduroy)", "헤링본(herringbone)", "데님(denim)", "기모(napping)", "홈스펀(homespun)", "트위드(tweed)", "펠트(felt)", "태피터(Taffeta)",
            "멜란지(melange)", "옥스퍼드(oxford)", "자카드(Jacquard)", "메탈릭사", "실켓(Silket)", "양면", "선염지", "오간자(oganza)", "Peach 가공", "시보리",
            "충전재", "패딩(padding)", "웰론", "덕다운(duck down)", "구스다운(Goose down)", "양가죽", "소가죽", "돼지가죽", "나빠(nappa)", "세무(suede)",
            "누벅(nubuck)", "무스탕(mustang)", "토스카나(toscana)", "밍크(mink)", "여우(fox)", "실버폭스(silver fox)", "블루폭스(blue fox)", "레드폭스(red fox)", "너구리(raccon)", "단비(sable)",
            "머스커랫(muskrat)", "다람쥐(squirrel)", "친칠라(chinchilla)", "토끼(rabbit)", "누트리아(nutria)",
            ];
        $groups_cn = [
            "면(cotton)", "마(hemp)", "린넨(linen)", "견(silk)", "양모(wool)", "모혜어(mohair)", "캐시미어(cashmere)", "앙고라(angora)", "알파카(alpaca)", "메리노울(merino wool)",
            "레이온(rayon)", "텐셀(tencel)", "큐프라(cupra)", "폴리에스테르(polyester)", "폴리우레탄(polyurethane)", "투웨이스판(사방스판)", "아세테이트(acetate)", "나일론(nylon)", "탁텔(tactel)", "아크릴(acrylic)",
            "공단(satin)", "T/C", "벨벳(velvet)", "저지(Jersey)", "분또", "폴라폴리스", "쉬폰(chiffon)", "지지미", "메모리(Memory)", "프라다",
            "네오프렌(neoprene)", "멜턴(melton)", "코듀로이(Corduroy)", "헤링본(herringbone)", "데님(denim)", "기모(napping)", "홈스펀(homespun)", "트위드(tweed)", "펠트(felt)", "태피터(Taffeta)",
            "멜란지(melange)", "옥스퍼드(oxford)", "자카드(Jacquard)", "메탈릭사", "실켓(Silket)", "양면", "선염지", "오간자(oganza)", "Peach 가공", "시보리",
            "충전재", "패딩(padding)", "웰론", "덕다운(duck down)", "구스다운(Goose down)", "양가죽", "소가죽", "돼지가죽", "나빠(nappa)", "세무(suede)",
            "누벅(nubuck)", "무스탕(mustang)", "토스카나(toscana)", "밍크(mink)", "여우(fox)", "실버폭스(silver fox)", "블루폭스(blue fox)", "레드폭스(red fox)", "너구리(raccon)", "단비(sable)",
            "머스커랫(muskrat)", "다람쥐(squirrel)", "친칠라(chinchilla)", "토끼(rabbit)", "누트리아(nutria)",
        ];
        $groups_en = [
            "면(cotton)", "마(hemp)", "린넨(linen)", "견(silk)", "양모(wool)", "모혜어(mohair)", "캐시미어(cashmere)", "앙고라(angora)", "알파카(alpaca)", "메리노울(merino wool)",
            "레이온(rayon)", "텐셀(tencel)", "큐프라(cupra)", "폴리에스테르(polyester)", "폴리우레탄(polyurethane)", "투웨이스판(사방스판)", "아세테이트(acetate)", "나일론(nylon)", "탁텔(tactel)", "아크릴(acrylic)",
            "공단(satin)", "T/C", "벨벳(velvet)", "저지(Jersey)", "분또", "폴라폴리스", "쉬폰(chiffon)", "지지미", "메모리(Memory)", "프라다",
            "네오프렌(neoprene)", "멜턴(melton)", "코듀로이(Corduroy)", "헤링본(herringbone)", "데님(denim)", "기모(napping)", "홈스펀(homespun)", "트위드(tweed)", "펠트(felt)", "태피터(Taffeta)",
            "멜란지(melange)", "옥스퍼드(oxford)", "자카드(Jacquard)", "메탈릭사", "실켓(Silket)", "양면", "선염지", "오간자(oganza)", "Peach 가공", "시보리",
            "충전재", "패딩(padding)", "웰론", "덕다운(duck down)", "구스다운(Goose down)", "양가죽", "소가죽", "돼지가죽", "나빠(nappa)", "세무(suede)",
            "누벅(nubuck)", "무스탕(mustang)", "토스카나(toscana)", "밍크(mink)", "여우(fox)", "실버폭스(silver fox)", "블루폭스(blue fox)", "레드폭스(red fox)", "너구리(raccon)", "단비(sable)",
            "머스커랫(muskrat)", "다람쥐(squirrel)", "친칠라(chinchilla)", "토끼(rabbit)", "누트리아(nutria)",
        ];
        for($i = 0; $i < count($groups_ko); $i++) {
            DB::table('groups')->insert([
                'name_ko' => $groups_ko[$i],
                'name_cn' => $groups_cn[$i],
                'name_en' => $groups_en[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
