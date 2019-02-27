<?php

use Illuminate\Database\Seeder;

class PublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publications')->delete();

        DB::table('publications')->insert(
        [
            [
                'context' => 'home.index',
                'title' => 'Kinds versus continua: A review of psychometric approaches to uncover the structure of psychiatric constructs',
                'year' => '2018',
                'abstract' => 'The question of whether psychopathology constructs are discrete kinds or continuous dimensions represents an important issue in clinical psychology and psychiatry. The present paper reviews psychometric modelling approaches that can be used to investigate this question through the application of statistical models. The relation between constructs and indicator variables in models with categorical and continuous latent variables is discussed, as are techniques specifically designed to address the distinction between latent categories as opposed to continua (taxometrics). In addition, we examine latent variable models that allow latent structures to have both continuous and categorical characteristics, such as factor mixture models and grade-of-membership models. Finally, we discuss recent alternative approaches based on network analysis and dynamical systems theory, which entail that the structure of constructs may be continuous for some individuals but categorical for others. Our evaluation of the psychometric literature shows that the kinds–continua distinction is considerably more subtle than is often presupposed in research; in particular, the hypotheses of kinds and continua are not mutually exclusive or exhaustive. We discuss opportunities to go beyond current research on the issue by using dynamical systems models, intra-individual time series and experimental manipulations.',
                'journal' => 'Psychological Medicine',
                'link' => 'praesent-tristique-gravida',
                'status' => 'accepted',
                'authors' => 'Borsboom, D., Rhemtulla, M., <b>Cramer, A. O. J.</b>, van der Maas, H. L. J., Scheffer, M., & Dolan, C. V.',
                'featured' => '1',
                'order' => '1'
            ],
            [
                'context' => 'home.index',
                'title' => 'Comorbidity of alcohol and cannabis use disorders among simultaneous alcohol and cannabis users. Insights from the network perspective',
                'year' => '2019',
                'abstract' => 'Steinley, Hoffman, Brusco and Sher (2017) proposed a new method for evaluating the performance of psychological network models: fixed-margin sampling. The authors investigated LASSO regularized Ising models (eLasso) by generating random datasets with the same margins as the original binary dataset, and concluded that many estimated eLasso parameters are not distinguishable from those that would be expected if the data were generated by chance. We argue that fixed-margin sampling cannot be used for this purpose, as it generates data under a particular null-hypothesis: a unidimensional factor model with interchangeable indicators (i.e., the Rasch model). We show this by discussing relevant psychometric literature and by performing simulation studies. Results indicate that while eLasso correctly estimated network models and estimated almost no edges due to chance, fixed-margin sampling performed poorly in classifying true effects as “interesting” (Steinley et al. 2017, p. 1004). Further simulation studies indicate that fixed-margin sampling offers a powerful method for highlighting local misfit from the Rasch model, but performs only moderately in identifying global departures from the Rasch model. We conclude that fixed-margin sampling is not up to the task of assessing if results from estimated Ising models or other multivariate psychometric models are due to chance.',
                'journal' => 'Psychological Medicine',
                'link' => 'praesent-tristique-gravida',
                'status' => 'submitted',
                'authors' => 'Borsboom, D., Rhemtulla, M., <b>Cramer, A. O. J.</b>, van der Maas, H. L. J., Scheffer, M., & Dolan, C. V.',
                'featured' => '1',
                'order' => '1'
            ],
            [
                'context' => 'home.index',
                'title' => 'Comorbidity of alcohol and cannabis use disorders among simultaneous alcohol and cannabis users. Insights from the network perspective',
                'year' => '2019',
                'abstract' => 'Steinley, Hoffman, Brusco and Sher (2017) proposed a new method for evaluating the performance of psychological network models: fixed-margin sampling. The authors investigated LASSO regularized Ising models (eLasso) by generating random datasets with the same margins as the original binary dataset, and concluded that many estimated eLasso parameters are not distinguishable from those that would be expected if the data were generated by chance. We argue that fixed-margin sampling cannot be used for this purpose, as it generates data under a particular null-hypothesis: a unidimensional factor model with interchangeable indicators (i.e., the Rasch model). We show this by discussing relevant psychometric literature and by performing simulation studies. Results indicate that while eLasso correctly estimated network models and estimated almost no edges due to chance, fixed-margin sampling performed poorly in classifying true effects as “interesting” (Steinley et al. 2017, p. 1004). Further simulation studies indicate that fixed-margin sampling offers a powerful method for highlighting local misfit from the Rasch model, but performs only moderately in identifying global departures from the Rasch model. We conclude that fixed-margin sampling is not up to the task of assessing if results from estimated Ising models or other multivariate psychometric models are due to chance.',
                'journal' => 'Psychological Methods',
                'link' => 'praesent-tristique-gravida',
                'status' => 'submitted',
                'authors' => 'Borsboom, D., Rhemtulla, M., <b>Cramer, A. O. J.</b>, van der Maas, H. L. J., Scheffer, M., & Dolan, C. V.',
                'featured' => '0',
                'order' => '1'
            ],
            [
                'context' => 'home.index',
                'title' => 'Comorbidity of alcohol and cannabis use disorders among simultaneous alcohol and cannabis users. Insights from the network perspective',
                'year' => '2019',
                'abstract' => 'Steinley, Hoffman, Brusco and Sher (2017) proposed a new method for evaluating the performance of psychological network models: fixed-margin sampling. The authors investigated LASSO regularized Ising models (eLasso) by generating random datasets with the same margins as the original binary dataset, and concluded that many estimated eLasso parameters are not distinguishable from those that would be expected if the data were generated by chance. We argue that fixed-margin sampling cannot be used for this purpose, as it generates data under a particular null-hypothesis: a unidimensional factor model with interchangeable indicators (i.e., the Rasch model). We show this by discussing relevant psychometric literature and by performing simulation studies. Results indicate that while eLasso correctly estimated network models and estimated almost no edges due to chance, fixed-margin sampling performed poorly in classifying true effects as “interesting” (Steinley et al. 2017, p. 1004). Further simulation studies indicate that fixed-margin sampling offers a powerful method for highlighting local misfit from the Rasch model, but performs only moderately in identifying global departures from the Rasch model. We conclude that fixed-margin sampling is not up to the task of assessing if results from estimated Ising models or other multivariate psychometric models are due to chance.',
                'journal' => 'Psychological Medicine',
                'link' => 'praesent-tristique-gravida',
                'status' => 'in press',
                'authors' => 'Borsboom, D., Rhemtulla, M., <b>Cramer, A. O. J.</b>, van der Maas, H. L. J., Scheffer, M., & Dolan, C. V.',
                'featured' => '0',
                'order' => '1'
            ],
            [
                'context' => 'home.index',
                'title' => 'Comorbidity of alcohol and cannabis use disorders among simultaneous alcohol and cannabis users. Insights from the network perspective',
                'year' => '2019',
                'abstract' => 'Steinley, Hoffman, Brusco and Sher (2017) proposed a new method for evaluating the performance of psychological network models: fixed-margin sampling. The authors investigated LASSO regularized Ising models (eLasso) by generating random datasets with the same margins as the original binary dataset, and concluded that many estimated eLasso parameters are not distinguishable from those that would be expected if the data were generated by chance. We argue that fixed-margin sampling cannot be used for this purpose, as it generates data under a particular null-hypothesis: a unidimensional factor model with interchangeable indicators (i.e., the Rasch model). We show this by discussing relevant psychometric literature and by performing simulation studies. Results indicate that while eLasso correctly estimated network models and estimated almost no edges due to chance, fixed-margin sampling performed poorly in classifying true effects as “interesting” (Steinley et al. 2017, p. 1004). Further simulation studies indicate that fixed-margin sampling offers a powerful method for highlighting local misfit from the Rasch model, but performs only moderately in identifying global departures from the Rasch model. We conclude that fixed-margin sampling is not up to the task of assessing if results from estimated Ising models or other multivariate psychometric models are due to chance.',
                'journal' => 'Psychological Medicine',
                'link' => 'praesent-tristique-gravida',
                'status' => 'submitted',
                'authors' => 'Borsboom, D., Rhemtulla, M., <b>Cramer, A. O. J.</b>, van der Maas, H. L. J., Scheffer, M., & Dolan, C. V.',
                'featured' => '0',
                'order' => '1'
            ]
        ]);
    }
}
