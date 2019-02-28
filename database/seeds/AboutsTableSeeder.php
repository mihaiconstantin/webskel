<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->delete();
        
        DB::table('abouts')->insert(
        [
            [
                'context' => 'home.index',
                'image' => 'network.png',
                'image_display' => '1',
                'image_position' => 'right',
                'content' => 'I am an Associate Professor in Models and Methods for Clinical Psychology at Tilburg University (department of Methodology and Statistics). Currently, I hold a NWO innovational VENI grant, which was awarded to me for my “Network psychometrics” project proposal. From February-June 2017 I work as a fellow at the NIAS institute (Netherlands Institute for Advanced Study in the Humanities and Social Sciences). <br><br>My main interest concerns the development of conceptual and statistical models for the development and maintenance of psychiatric disorders such as major depression and generalized anxiety disorder. I specifically focus on network models and complex dynamical systems. From a network perspective, disorders develop because of prolonged direct interactions between symptoms. For example, insomnia causes fatigue, which, in turn, causes concentration problems and loss of interest; eventually resulting in a depressive episode. This conceptualization of disorders flies in the face of existing perspectives in which a depressive episode is a disease that – for example analogous to a lung tumor – causes its symptoms such as insomnia and fatigue. <br><br>Other interests include measurement invariance, item response theory (IRT), structural equation modeling (SEM), theories of measurement and solutions to the multiple comparisons problem. <br><br>If you have suggestions, comments and/or questions, you can e-mail me at aoj.cramer(at)gmail(dot)com.',
                'animation' => 'fade-right',
                'order' => '1'
            ]
        ]);   
    }
}
