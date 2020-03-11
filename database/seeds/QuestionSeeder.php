<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            \App\Question::create([
                'user_id'       => mt_rand(2,9),
                'title'         => '문의하기'.$i,
                'content'       => '눈에 인류의 청춘의 인생에 아니한 같으며, 힘있다. 너의 만천하의 무엇이 얼마나 내는 따뜻한 피가 우리는 것이다. 곧 이것을 무엇을 황금시대의 보배를 때문이다. 주며, 넣는 타오르고 무엇을 이 관현악이며, 있는 수 할지라도 부패뿐이다. 인생을 놀이 바이며, 소담스러운 우리의 피부가 유소년에게서 인간의 구하지 보라. 위하여서, 어디 청춘의 오아이스도 피에 있으랴? 예가 품고 충분히 듣는다. 끝에 있는 우리 모래뿐일 행복스럽고 힘차게 방지하는 끓는 있으며, 칼이다. 두손을 가지에 청춘의 충분히 것이다. 사랑의 있음으로써 때까지 갑 하는 피어나기 굳세게 열락의 사막이다.

너의 가치를 그것은 있다. 동산에는 어디 예가 싹이 얼마나 보이는 그들에게 이것이다. 커다란 얼마나 바로 피가 불어 몸이 약동하다. 오아이스도 이상을 피어나기 사막이다. 영원히 가치를 희망의 있는 온갖 광야에서 투명하되 우리는 운다. 같이 원질이 품으며, 구할 인간이 꽃이 거친 가진 물방아 있다. 인도하겠다는 끝까지 하였으며, 뜨거운지라, 예가 풍부하게 우리 보내는 평화스러운 위하여서. 소리다.이것은 남는 물방아 인간은 커다란 인도하겠다는 얼마나 뜨고, 봄바람이다. 것은 방황하였으며, 사는가 것이다. 지혜는 가치를 가치를 우는 이상을 이 있다.

얼음에 물방아 생명을 그들은 붙잡아 원대하고, 보라. 것이다.보라, 것은 내는 고동을 두기 이상 자신과 봄날의 이것이다. 인류의 품고 때까지 천지는 미인을 보라. 할지라도 피고, 긴지라 찬미를 이 품에 위하여 인생의 뿐이다. 굳세게 그와 그림자는 피어나는 교향악이다. 이상은 두손을 들어 것이다. 바이며, 구하지 얼음이 곳으로 보는 인간이 청춘의 따뜻한 살 철환하였는가? 어디 가진 때까지 봄바람이다. 청춘이 이것을 밥을 구하기 뛰노는 같은 인생에 봄바람이다. 그림자는 주며, 안고, 있음으로써 현저하게 불어 있는 길을 그들에게 끓는다. 돋고, 길지 청춘의 할지라도 뛰노는 이것을 풀밭에 청춘의 인생에 끓는다.',
                'created_at'    => date('Y-m-d H:i:s', time()),
                'updated_at'    => date('Y-m-d H:i:s', time()),

            ]);
        }
    }
}