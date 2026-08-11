<?php

namespace Database\Seeders;

use App\Models\ContentBlock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$types = ['article', 'interview', 'episode'];
		foreach ($types as $type)
		{
			ContentBlock::factory()
				->count(4)
				->state(['type' => $type])
				->arabic()
				->create();	
			ContentBlock::factory()
				->count(4)
				->state(['type' => $type])
				->english()
				->create();
		}
		ContentBlock::create([
			'locale' => 'ar',
			'type' => 'series',
			'title' => 'وقفة اقتصادية',
			'description' => 'شرح عام عن المعلومات التي يتم تقديمها في هذه السلسلة وعن ماهية المحتوى المتعاطى، إضافة إلى فكرة عامة عن ما يمكن توقعه من الحلقات المختلفة',
			'link' => 'https://www.youtube.com/watch?v=QYNAO6ytOZc&list=PLXP7pE3AV8OniD6UM2pRFpPXj0P7eqnhF',
			'thumbnail' => 'images/Series1-Waqfa.jpeg',
			'order' => 1,
		]);
		ContentBlock::create([
			'locale' => 'ar',
			'type' => 'series',
			'title' => 'أكاديمية رؤية',
			'description' => 'شرح عام عن المعلومات التي يتم تقديمها في هذه السلسلة وعن ماهية المحتوى المتعاطى، إضافة إلى فكرة عامة عن ما يمكن توقعه من الحلقات المختلفة',
			'link' => 'https://www.youtube.com/watch?v=hq9zf6_sD08&list=PLXP7pE3AV8OkEPHYywFwPB_e1_ycJfgVo',
			'thumbnail' => 'images/Series2-Roya.jpg',
			'order' => 2,
		]);
		ContentBlock::create([
			'locale' => 'ar',
			'type' => 'series',
			'title' => 'الحلقات التلفزيونية',
			'description' => 'شرح عام عن المعلومات التي يتم تقديمها في هذه السلسلة وعن ماهية المحتوى المتعاطى، إضافة إلى فكرة عامة عن ما يمكن توقعه من الحلقات المختلفة',
			'link' => 'https://www.youtube.com/watch?v=aS7lcnDaJRk&list=PLXP7pE3AV8Ok_wh40I753oKGU3nOuSCw1&index=1',
			'thumbnail' => 'images/Series3-TV.jpg',
			'order' => 3,
		]);
		ContentBlock::create([
			'locale' => 'en',
			'type' => 'series',
			'title' => 'Economic Insight (Arabic)',
			'description' => 'A short description about the video series talking about the main focus of it, the topics included and perhaps an overview of what to expect from a typical episode.',
			'link' => 'https://www.youtube.com/watch?v=QYNAO6ytOZc&list=PLXP7pE3AV8OniD6UM2pRFpPXj0P7eqnhF',
			'thumbnail' => 'images/Series1-Waqfa.jpeg',
			'order' => 1,
		]);
		ContentBlock::create([
			'locale' => 'en',
			'type' => 'series',
			'title' => 'Ro\'ya Academy (Arabic)',
			'description' => 'A short description about the video series talking about the main focus of it, the topics included and perhaps an overview of what to expect from a typical episode.',
			'link' => 'https://www.youtube.com/watch?v=hq9zf6_sD08&list=PLXP7pE3AV8OkEPHYywFwPB_e1_ycJfgVo',
			'thumbnail' => 'images/Series2-Roya.jpg',
			'order' => 3,
		]);
		ContentBlock::create([
			'locale' => 'en',
			'type' => 'series',
			'title' => 'Television Interviews',
			'description' => 'A short description about the video series talking about the main focus of it, the topics included and perhaps an overview of what to expect from a typical episode.',
			'link' => 'https://www.youtube.com/watch?v=MmX9iq5vSEA&list=PLXP7pE3AV8Onn9z6NuFvIQnZpdg5ObC--',
			'thumbnail' => 'images/Series3-English.jpg',
			'order' => 2,
		]);
		ContentBlock::create([
			'locale' => 'ar',
			'type' => 'book',
			'title' => 'الجذر الاقتصادي للثورة السورية',
			'description' => 'قراءة تحليلية تكشف الدور الحاسم للواقع الاقتصادي والفساد البنيوي في إشعال الثورة السورية، وتبيّن كيف أسهم الظلم الاقتصادي وتهميش الإنسان في كسر جدار الخوف والانفجار الشعبي',
			'link' => 'https://alsanabel.net/product/%D8%A7%D9%84%D8%AC%D8%B0%D8%B1-%D8%A7%D9%84%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF%D9%8A-%D9%84%D9%84%D8%AB%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B3%D9%88%D8%B1%D9%8A%D8%A9/',
			'thumbnail' => 'images/Book1.jpeg',
			'order' => 1,
		]);
		ContentBlock::create([
			'locale' => 'ar',
			'type' => 'book',
			'title' => 'البؤس الاقتصادي السوري',
			'description' => 'دراسة تحليلية توثّق الانهيار الاقتصادي الشامل في سوريا بعد عام 2011، وتكشف عبر المؤشرات والأرقام حجم البؤس الاقتصادي وتحوله إلى فاجعة إنسانية، مع قراءة معمّقة في أثر الاستبداد والصراع الدولي على مستقبل البلاد',
			'link' => 'https://alsanabel.net/product/books-13/',
			'thumbnail' => 'images/Book2.jpeg',
			'order' => 2,
		]);
		ContentBlock::create([
			'locale' => 'ar',
			'type' => 'book',
			'title' => 'سيناريوهات إعادة الإعمار في سوريا',
			'description' => 'دراسة استراتيجية معمّقة تستعرض الآفاق الاقتصادية والسياسية لسوريا في ضوء سيناريوهات متعددة لإعادة الإعمار، وتطرح إطارًا متكاملاً للتعافي وإعادة البناء، مع تحديد الركائز الخمس الأساسية لإعادة الإعمار بعد التوصل إلى حل سياسي مستدام',
			'link' => '#',
			'thumbnail' => 'images/Book3.jpeg',
			'order' => 3,
		]);
		ContentBlock::create([
			'locale' => 'en',
			'type' => 'book',
			'title' => 'الجذر الاقتصادي للثورة السورية',
			'description' => 'An analytical study that reveals the decisive role of economic conditions and structural corruption in igniting the Syrian revolution, and demonstrates how economic injustice and the marginalization of people contributed to breaking the barrier of fear and triggering the popular uprising.',
			'link' => 'https://alsanabel.net/product/%D8%A7%D9%84%D8%AC%D8%B0%D8%B1-%D8%A7%D9%84%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF%D9%8A-%D9%84%D9%84%D8%AB%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B3%D9%88%D8%B1%D9%8A%D8%A9/',
			'thumbnail' => 'images/Book1.jpeg',
			'order' => 1,
		]);
		ContentBlock::create([
			'locale' => 'en',
			'type' => 'book',
			'title' => 'البؤس الاقتصادي السوري',
			'description' => 'An analytical study documenting Syria\'s economic collapse after 2011, revealing through key indicators and data the scale of hardship and its transformation into a humanitarian catastrophe, while examining the impact of authoritarianism and international conflict on the country\'s future.',
			'link' => 'https://alsanabel.net/product/books-13/',
			'thumbnail' => 'images/Book2.jpeg',
			'order' => 2,
		]);
		ContentBlock::create([
			'locale' => 'en',
			'type' => 'book',
			'title' => 'سيناريوهات إعادة الإعمار في سوريا',
			'description' => 'An in-depth study examining Syria\'s economic and political future through multiple reconstruction scenarios, offering a comprehensive analytical framework for national recovery while identifying the five fundamental pillars of post-settlement reconstruction.',
			'link' => '#',
			'thumbnail' => 'images/Book3.jpeg',
			'order' => 3,
		]);
    }
}
