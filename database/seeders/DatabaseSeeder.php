<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create();

        $general = Category::create([
            'name' => 'General',
            'slug' => 'general'
        ]);

        $news = Category::create([
            'name' => 'News',
            'slug' => 'news'
        ]);

        $sports = Category::create([
            'name' => 'Sports',
            'slug' => 'sports'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $general->id,
            'title' => 'First Post',
            'slug' => 'first-post',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione itaque magnam deserunt dicta asperiores sapiente recusandae ullam provident illo nulla qui id culpa dignissimos beatae unde praesentium sed eaque quis, laborum, placeat, sequi vitae ducimus esse. Ea possimus totam labore vitae nihil, ipsa, cupiditate id facere alias amet rerum. Voluptas temporibus repudiandae explicabo odio ipsam omnis nemo ipsum sequi voluptatibus? Fugiat deserunt maxime iusto culpa ipsum? Blanditiis, expedita rerum! Obcaecati illum, enim id quo aspernatur dolores sit beatae laboriosam eaque, doloribus iste expedita officia culpa unde ab neque sed odio, suscipit veniam tempora mollitia molestiae soluta quod numquam? Vel nesciunt nobis, dolor sapiente, vero quis modi magnam odio neque dolores, error repellendus consectetur architecto! Labore repudiandae, temporibus nemo beatae magni non sint pariatur quam! Placeat nisi illum ullam nihil eligendi. Quae magnam, reprehenderit neque nam magni molestiae nulla, quod dicta eveniet possimus, quasi sapiente officiis officia dolore corporis cupiditate. Necessitatibus exercitationem modi delectus excepturi, maiores consectetur nobis quaerat culpa voluptatum dolores ipsa autem animi dolorem vitae magni temporibus, perferendis obcaecati, impedit laborum distinctio voluptates ipsum voluptate ab. Amet quae dolorum quos rem ad dignissimos quia fuga distinctio officiis placeat optio, quis quibusdam quas eum cumque veniam nihil consectetur saepe! Velit alias repudiandae mollitia laboriosam, pariatur officia earum animi! Quam, dignissimos! Molestiae similique voluptate error fuga adipisci fugit suscipit repellendus accusamus! Laudantium omnis ducimus repellat deserunt consequuntur ipsum delectus sit quo quis expedita voluptatibus, fugiat necessitatibus corrupti inventore adipisci nulla esse quod. Odit alias iste quia nam deserunt ea veritatis provident.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $news->id,
            'title' => 'Breaking News',
            'slug' => 'breaking-news',
            'excerpt' => 'breaking-news',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore earum natus modi voluptates facilis maxime, aliquam cumque culpa quod quae cum beatae placeat ipsum temporibus sunt dolor vitae voluptatem. Deleniti cum explicabo minima pariatur at, omnis velit nulla molestias deserunt dicta voluptatem atque aspernatur veritatis molestiae vero eligendi consequatur qui iure accusantium, est esse? Tempore eligendi natus qui quisquam ipsum sapiente reiciendis ut quaerat tenetur obcaecati saepe mollitia vitae soluta dignissimos magni excepturi earum, animi aut veritatis nam totam atque accusantium? Soluta, quisquam maxime. Dicta deserunt nam ratione. Similique, fugit porro quis cum soluta dolorem quasi facere commodi, nostrum voluptatem, incidunt vero ea deserunt quibusdam nulla pariatur laborum ab quidem! Doloribus nam in, totam dolorem quam ab, voluptate aliquam exercitationem sunt impedit cumque provident laborum, excepturi quas quibusdam amet expedita? Cum, fuga dolor iusto libero voluptatum non ducimus, doloribus ut commodi pariatur, quibusdam quo enim doloremque nostrum. Officiis earum explicabo laborum, ex animi quod vel nemo vitae consectetur illum, aliquam, distinctio eaque cum suscipit minima blanditiis sed! Beatae maxime id laborum laudantium quod, odit expedita non quam, nemo sequi asperiores magnam totam ab alias, necessitatibus omnis harum animi at? Corrupti nisi qui, recusandae eum ipsam, delectus nam ea, id quos atque ex non architecto porro distinctio sed? Illum, corporis! Ipsum eos, voluptatem culpa facere recusandae rem. Tempore eius consequatur deleniti veritatis nostrum quae molestiae quia veniam, iure sit excepturi provident officiis facilis enim consectetur eveniet expedita cupiditate iusto explicabo minus eos quam laudantium? Quo, accusamus?'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $sports->id,
            'title' => 'New Sports',
            'slug' => 'new-sports',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus eveniet perferendis quo iste. Corrupti tenetur, obcaecati enim ab debitis neque possimus beatae vel! Quasi fugiat id ex magni, quae rerum aut nam quos officia tempora enim quis nulla, quaerat nostrum numquam beatae, ipsum assumenda deserunt ratione est distinctio corrupti sequi. Corrupti ad distinctio quas similique sint, expedita iste ea quidem vitae delectus perferendis iure vel deserunt cumque saepe, ab non. Temporibus vero dolore culpa neque ullam inventore ab quos sequi id fugit facere, hic voluptas numquam pariatur. Quidem magnam et quod! Impedit, ducimus distinctio fugit inventore est libero ex perspiciatis molestias cumque saepe quo eveniet officiis sit quos fuga doloremque, vitae cupiditate? Distinctio, delectus similique excepturi repellat perspiciatis optio dolorem voluptatem nemo tempora facere vero consequuntur voluptatum quo, at eum rerum. Dolor, dolorum. Expedita ex quos, harum consequuntur quisquam quidem nam minima distinctio excepturi, id ipsam, ut asperiores facilis nesciunt deserunt sequi eligendi vel quo officiis earum repellendus. Quam aspernatur ipsum repellendus aut totam voluptatibus sunt labore ea delectus distinctio, eligendi excepturi esse consequatur enim, nostrum suscipit aliquam aliquid ducimus quia rerum temporibus cum harum cupiditate blanditiis. At sapiente cumque recusandae esse, voluptatum quo similique quas reiciendis quia maiores! Sapiente quam in consectetur architecto accusantium voluptate adipisci non reprehenderit error recusandae laudantium, quis, repellat eos nostrum, hic ea asperiores tempora? Dignissimos consequatur, perspiciatis eligendi quibusdam quidem amet autem cum iste laborum corporis ad possimus, deleniti quis velit placeat, in aliquid expedita culpa error ullam fugit nemo qui. Sunt exercitationem placeat distinctio, dolor voluptatum quae sapiente vitae consequatur repudiandae, ratione excepturi.'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
    }
}
