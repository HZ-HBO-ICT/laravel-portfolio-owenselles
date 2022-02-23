<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
                [
                    'question' => 'Q: At HZ, how do you print a document from a laptop?',
                    'answer' => 'Enter your HZ username and password and Login
Click on Choose File and select the file to print.
Click on Next. Repeat the previous step if you want to add more documents.
Wait until the document has been processed and then click on the Advanced option to state whether you want double-sided or black & white printing.
Select the HZ printer to print your document(s).

Once the print job has been requested you must login using your HZ pass on the RFID reader next to the printer. Next, select the printer option Print / Afdrukken. In the menu, select the printer to where the job has been sent. Next, you can see which printer job is ready to be printed. The print job is completed provided there is sufficient credit on your printing account. When the printing is completed, press Stop on the RFID reader, followed by Logout.',
                    'link' => 'http://print.hz.nl'
                ],
                [
                    'question' => 'Q: At HZ, how do you scan a document and save it to your laptop?',
                    'answer' => 'Make sure you have at least €0.07 credit. Although scanning is free, you must have this amount of credit on your HZ pass.
Register using your HZ pass on the RFID reader next to the printer.
In the printer menu, select option Scan.
Lay the original sheet on the feeder or glass plate.
Press Scan and Send.
Press Scan to me.
Press Yes.
Press the Start button.
Press the green Start button on the printer to scan page by page. Once this is ready, press Start Sending.',
                    'link' => '',
                ],
                [
                    'question' => 'Q: What do you need to do when you are sick / show symptoms of coronavirus?',
                    'answer' => 'Contact the teachers/helpdesk at school and stay home. Follow the lessons on stream to compensate for that unusual sickness.',
                    'link' => '',
                ],
                [
                    'question' => 'Q: How can you reserve space in one of the wings for a project?',
                    'answer' => 'Select the option type "meeting room" to see all meeting rooms that are available for reservation.
Select a room
Fill in your details
Confirm reservation',
                    'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner?from=f56d5230-ffe5-4ab7-ad47-ec9374b5ec34',
                ],
                [
                    'question' => 'Q: How do I park my car in the HZ lot?',
                    'answer' => 'If you have a HZ student pass navigate with your car to the parking spot at the following address: Poelendaelesingel, 4335 JA Middelburg. Here you can press your HZ Students pass against the RFID reader and the pole will open up and you can park your car.',
                    'link' => '',
                ],
            ]
        );
    }
}
