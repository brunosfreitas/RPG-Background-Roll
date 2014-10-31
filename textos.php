<?php

const TITULO = 'titulo';
const DESCRICAO = 'descricao';
const OPCOES = 'opcoes';

class Textos_Rolagem {
    private $array_data;

    function __construct() {
        $this->array_data['pergunta_1'][TITULO] = "Home Climate";
        $this->array_data['pergunta_1'][DESCRICAO] = "What is the land like where you were born and raised?";
        $this->array_data['pergunta_1'][OPCOES] = array(
            15 => array(
                "Cold (arctic or subarctic)",
                "It’s cold all year long, although seasons are still discernible. The length of day and night changes greatly from season to season."),
            65 => array(
                "Temperate",
                "Cold winters, but warm summers."),
            100 => array(
                "Warm (tropical and subtropical)",
                "Conditions are warm year-round.")
        );

        $this->array_data['pergunta_2'][TITULO] = "Home Community, Human";
        $this->array_data['pergunta_2'][DESCRICAO] = "Humans in most games have a rural background. If you choose to play a character from a larger city, you should make sure to work with your DM to deter- mine the nature and location of that city.";
        $this->array_data['pergunta_2'][OPCOES] = array(
            5 => array(
                "Small Tribe",
                "Life in your tiny community centers around hunting and gathering, herding, or subsistence farming. Your tribe has 100 people or less."),
            10 => array(
                "Religious, Arcane, Monastic or Military Compound",
                "These communities tend to be close-knit and focused on a single interest. Up to 200 people."),
            20 => array(
                "Frontier Homestead",
                "Life on the frontier is spartan and dangerous, but it encourages self-sufficiency. Most homesteads include only one or two families."),
            35 => array(
                "Thorp",
                "These small settlements are usually little more than a cluster of farmhouses. Population ranges from 20 to 80."),
            55 => array(
                "Hamlet",
                "Larger than thorps, hamlets have up to 400 people."),
            75 => array(
                "Village",
                "The smallest community that will support a number of craftspeople. Population ranges from 401 to 900."),
            80 => array(
                "Small Town",
                "A town large enough to appear on most maps. Population up to 2,000."),
            85 => array(
                "Large Town",
                "Large towns serve as regional and provincial centers. Size ranges from 2,001 to 5,000 inhabitants."),
            90 => array(
                "Small City",
                "With up to 12,000 residents, small cities are big enough to be the capitals of smaller nations."),
            95 => array(
                "Large City",
                "The dominant city in a large country will typically have between 12,001 and 25,000 inhabitants."),
            100 => array(
                "Metropolis",
                "Only the largest cities in the world have more than 25,000 residents."),
        );

//        $this->array_data['second']['b'] = '2';
//        $this->array_data['third']['c'] = '3';
    }

    public function getIndexValue(array $indexes) {
        // count the # of indexes we have
        $count = count($indexes);

        // local reference to data
        $data = $this->array_data;

        for ($i = 0; $i < $count; $i++)
        {
            // enter the array at the current index
            $data = $data[$indexes[$i]];
        }

        return $data;
    }
}
