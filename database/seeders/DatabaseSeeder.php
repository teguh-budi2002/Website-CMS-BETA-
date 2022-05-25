<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tags;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Tags::create([
            'nama' => 'Apa Aja',
            'slug' => 'apa-aja',
            'post_id' => '1'
        ]);
        // Post::create([
        //     'judul' => 'Laravel',
        //     'slug' => 'laravel',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto, magnam repudiandae. Harum libero provident, at vel ducimus vero id rerum. Alias ad minus iste ab cupiditate ipsa veritatis nihil atque',
        //     'author' => 'Teguh Budi Laksono',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis porro nobis nam officia quasi, unde laudantium, commodi neque quos explicabo temporibus facilis eos a? Dolore non cupiditate voluptatum porro dolorum obcaecati in nesciunt repudiandae, officia sint labore facilis atque tenetur ad possimus doloremque quisquam? Recusandae veniam vel voluptatum aliquid atque laborum quod neque repellat. Autem repellat illum velit earum recusandae animi? Temporibus delectus vel iure, tempora quisquam omnis excepturi fuga minus sapiente nemo commodi laudantium nisi beatae voluptatibus, animi quia explicabo optio amet eos fugit, ut ex quibusdam labore! Libero quia eos dolor vitae velit esse temporibus incidunt atque exercitationem cum aliquam fuga laborum quisquam optio nobis cumque voluptatum in itaque molestias culpa nisi, eius mollitia doloribus pariatur! Quos recusandae voluptatem corporis, nostrum ea aliquid similique veniam facilis quod, blanditiis perferendis fuga cum aspernatur numquam, deserunt aperiam. Fugit perspiciatis obcaecati aspernatur voluptatum. Minima enim voluptatibus, aspernatur ipsam facere quo voluptate magnam vel tenetur ab optio beatae sapiente necessitatibus, laboriosam delectus alias officiis. Repudiandae possimus enim suscipit, veniam pariatur ut earum, voluptatum harum omnis, eos minima molestias quidem voluptatem. Quia quidem non impedit eius assumenda fugit officiis maiores beatae! Enim sunt aliquid officia pariatur ipsum expedita fugit consequatur laborum? Eum porro eos quidem maxime inventore voluptatum doloribus velit neque, esse quisquam, accusantium similique, reprehenderit amet dolore voluptatem. Libero dignissimos quam nesciunt aperiam, a ullam pariatur nemo odio magnam molestias aliquam reprehenderit quibusdam asperiores, debitis explicabo eos, saepe consectetur quo. Commodi debitis, iste, qui illum ipsa culpa earum quas ut eum voluptatum delectus? Eius vel doloremque deserunt enim laborum perspiciatis odio, recusandae nulla porro reiciendis repellat, quod accusamus sed in veniam nisi voluptate maxime non a nostrum eaque omnis aliquid! Porro sunt facere saepe eaque expedita adipisci minus rem nihil beatae quo, nemo veritatis pariatur eius ratione natus, et, repellendus quas sapiente illum amet officia rerum. Similique ipsum voluptas sequi beatae vel dolores eius commodi eos provident possimus. Rerum nostrum praesentium, voluptatibus eius maiores ipsa tempore sint, perferendis doloribus quae sequi quia. Dolores quasi neque vitae, at provident culpa saepe laborum, blanditiis quam illum cum quod nulla exercitationem eius ipsam, facere natus? Natus, reprehenderit! Eum necessitatibus sit voluptatem? Repellendus tempore quae qui iusto accusantium sequi inventore provident nisi optio nulla nobis perspiciatis adipisci fuga error iure minima deserunt ducimus earum, exercitationem, dicta dolore aut rem? Quia ipsa porro quae. Corporis adipisci cumque quaerat sint cupiditate deleniti est, quidem nobis aliquid quisquam accusamus commodi itaque explicabo vitae quae esse quod labore sequi incidunt. Aperiam, sed sunt. Quae magni maiores quia voluptate minima, ad delectus harum tempore, quis dolores ipsam architecto sed suscipit doloribus nostrum temporibus repudiandae adipisci necessitatibus est, nulla ex! Illum maiores qui voluptatum quae exercitationem! Expedita quia libero id autem iusto vero dolore dolores temporibus necessitatibus, quaerat commodi explicabo minus adipisci repellendus aliquam quod enim nostrum. Repudiandae consectetur quis molestias totam similique, ex nam amet repellat! Eum, maiores explicabo! Fugiat asperiores nobis architecto quasi corporis veritatis voluptas libero eum dolorum! Fugiat vitae similique quam ut laborum a atque ipsam culpa nesciunt magni accusantium alias, pariatur accusamus quo iste odio. Consequatur nesciunt quaerat aspernatur iure id similique quas ab debitis, repellendus quis eaque quisquam voluptatem excepturi natus ex suscipit harum recusandae! Sunt quam totam ea saepe nihil recusandae ullam velit expedita quod fuga rerum molestias unde similique eligendi at non modi mollitia adipisci tenetur, eius accusantium facilis perferendis! Magni cupiditate corporis dolorem, voluptatibus aspernatur quos at veritatis hic rem tempora, iure ipsam et ullam eum qui id sequi neque voluptates, in provident? Cum, illum tempora numquam natus sit ipsum nobis unde repudiandae ullam odit iusto, eaque recusandae? Vero sit ut ea recusandae, earum inventore quae ipsam? Architecto magnam aliquam rem tenetur. Numquam, nulla alias? Blanditiis voluptatibus nisi quibusdam sunt veniam cumque quis, itaque deserunt harum ea earum dolorum voluptas expedita asperiores in beatae ipsa facere? A est consequatur recusandae. Velit dignissimos consequuntur alias, amet nobis rem nostrum reiciendis recusandae repellat, tenetur ducimus quo saepe libero cupiditate totam dolor? Saepe deleniti eveniet ut sunt necessitatibus veritatis ipsa! Animi voluptate nobis, natus molestiae quam, sapiente maiores obcaecati eligendi dolore nemo vero ut enim, in a aliquam beatae aliquid est. Autem eum et architecto nisi rem, nobis aperiam mollitia id perspiciatis accusantium similique consequatur natus ratione molestias unde porro dignissimos vero? Maiores accusamus obcaecati at aspernatur eveniet eum, earum voluptas tempora eaque quasi minus nemo dignissimos provident laudantium porro ut commodi quam officia tenetur nulla repellendus accusantium ipsa, doloribus temporibus! Quis minima distinctio error cum fugit enim et, cupiditate quod neque atque nam provident, incidunt vel voluptas quia nihil accusamus aliquid! Quod iure nobis nostrum sequi accusantium assumenda nesciunt! Earum, esse expedita reiciendis sequi corrupti cupiditate. Illum unde, animi dicta corporis ad delectus. Rem numquam expedita dicta consequatur, voluptas odit odio. Ducimus voluptate iste sed culpa. Tenetur, eligendi illum quasi reprehenderit accusamus nisi sapiente obcaecati error reiciendis inventore minus eos doloribus quis ea repellendus, provident architecto? Dolorum quia consequuntur modi culpa dolores, porro aliquam harum deserunt aspernatur nesciunt voluptatem numquam voluptate rerum in possimus sed, esse consequatur quis doloremque sequi repellendus eum. Repudiandae, corrupti. Ullam maiores obcaecati eveniet repellendus, laboriosam quis ratione laborum. Consequatur sit eius tenetur obcaecati vero odio repudiandae quos, at fugit ex aliquam, neque a id ut voluptate molestias tempore, natus sed dolorum doloribus! Repellat non, sed similique maxime accusantium corrupti commodi nostrum sint amet dolores vero corporis odio. Quae at dicta amet repellendus maiores sint est quasi illum, rem incidunt totam ducimus facilis atque voluptatum a! Doloremque autem atque laudantium assumenda fugit ratione quo officiis aut nulla adipisci? Sunt suscipit quas unde ipsam, qui numquam pariatur, neque aliquid autem non commodi aut necessitatibus enim velit illum obcaecati molestiae error soluta. Nihil error corrupti pariatur odio molestias itaque tempore, fugit provident, dolorem, quis at! Odit nihil, numquam officia perferendis aspernatur quasi et aperiam consectetur vel voluptas veritatis, quia corrupti temporibus saepe ipsam! Quia laboriosam fugit vel soluta ab cumque doloremque voluptatibus aut aperiam. Animi at blanditiis dignissimos repellendus sed, eveniet quibusdam accusamus sapiente ipsam reprehenderit nisi dolore, mollitia, dolores unde in consequuntur.',
        //     'category_id' => 1
        // ]);
        // Post::factory(200)->create();
        // Category::factory(200)->create();
        // Category::create([

        //     'name' => 'Laravel',
        //     'slug' => 'laravel'
        // ]);

        // Category::create([

        //     'name' => 'PHP',
        //     'slug' => 'php'
        // ]);

        // Category::create([

        //     'name' => 'HTML',
        //     'slug' => 'html'
        // ]);

        // User::create([
        //     'username' => 'Teguh Budi Laksono',
        //     'email' => 'kudaliar1833@gmail.com',
        //     'password' => 'teguhbudi1833'
        // ]);
    }
}
