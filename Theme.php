<?php
namespace mapasculturaisThemeBH;
//use MapasCulturais\Themes\BaseV1;
use MapasCulturais\App;

//class Theme extends BaseV1\Theme{
class Theme extends \MapasCulturais\Themes\BaseV1\Theme {

    protected static function _getTexts(){
        $app = App::i();
        $self = $app->view;
        $url_search_agents = $self->searchAgentsUrl;
        $url_search_spaces = $self->searchSpacesUrl;
        $url_search_events = $self->searchEventsUrl;
        $url_search_projects = $self->searchProjectsUrl;

        return [
            'site: name' => 'Mapa Cultural BH',
            'site: description' => App::i()->config['app.siteDescription'],
            'site: in the region' => 'na região',
            'site: of the region' => 'da região',
            'site: owner' => 'Secretaria',
            'site: by the site owner' => 'pela Secretaria',
	    'home: title' => " ",

            //'home: title' => "Mapear para reconhecer, valorizar e proteger!",
            // 'home: title' => "Bem-vind@!",
            'home: abbreviation' => "Fundação Municipal de Cultura",
            'home: colabore' => "Colabore com o Mapas Culturais",
    //         'home: welcome' => "A Fundação Municipal de Cultura disponibiliza para a comunidade belo-horizontina e todo o Brasil,
				// informações sobre o cenário cultural da cidade de Belo Horizonte no Mapa Cultura BH. O Mapa Cultura
				// BH é uma plataforma de software livre e gratuita para o mapeamento colaborativo de agentes, espaços,
				// eventos e projetos culturais da cidade. A plataforma é alimentada pelos próprios participantes e está
				// alinhada ao Sistema Nacional de Informações e Indicadores Culturais (SNIIC) do Ministério da Cultura,
				// permitindo a integração e a visualização das informações culturais em âmbito nacional. Ficou mais fácil
				// se programar para conhecer as opções culturais que a cidade oferece: shows musicais, espetáculos de
				// teatro e dança, cinema, festas e manifestações tradicionais e populares, saraus, entre outras. Além de
				// acompanhar a agenda de eventos, você também pode colaborar na gestão da cultura da cidade: basta criar
				// seu perfil de agente cultural. A partir deste cadastro, você pode participar dos editais de fomento e
				// divulgar seus eventos, espaços ou projetos.",
           
		   
		   //welcome utilizado antes da lei
           'home: welcome' => "",		   
		   /*'home: welcome' => "O Mapa Cultural BH é uma plataforma de software livre, gratuita e colaborativa da Fundação Municipal de Cultura (FMC), com diversas informações sobre o cenário cultural da cidade de Belo Horizonte. A plataforma é alimentada pela FMC com informações sobre os espaços culturais, programações oficiais, projetos e editais; e pela população, que se cadastra como agente (individual ou coletivo) e pode divulgar sua própria programação. Outro aspecto importante do Mapa Cultural BH é o seu alinhamento com o Sistema Nacional de Informações e Indicadores Culturais (SNIIC) do Ministério da Cultura, que permite a integração e a visualização das informações culturais em âmbito nacional.
    Por meio dele, você pode conhecer as opções culturais que a cidade oferece: shows, musicais, espetáculos de teatro e dança, cinema, festas, saraus e manifestações tradicionais e populares, entre outras. Além de acompanhar a agenda de eventos, você também pode colaborar na gestão da cultura da cidade, para isso basta criar seu perfil de agente cultural e a partir deste cadastro, participar dos editais da Fundação Municipal de Cultura e divulgar seus eventos, espaços ou projetos. Contato: mapaculturalbh@gmail.com",
*/
            //'home: welcome' => "O Mapa Cultural BH é uma plataforma de software livre, gratuita e colaborativa da Fundação Municipal de Cultura (FMC), com diversas informações sobre o cenário cultural da cidade de Belo Horizonte. A plataforma é alimentada pela FMC com informações sobre os espaços culturais, programações oficiais, projetos e editais; e pela população, que se cadastra como agente (individual ou coletivo) e pode divulgar sua própria programação. Outro aspecto importante do Mapa Cultural BH é o seu alinhamento com o Sistema Nacional de Informações e Indicadores Culturais (SNIIC) do Ministério da Cultura, que permite a integração e a visualização das informações culturais em âmbito nacional.
    //Agora, você pode se programar para conhecer as opções culturais que a cidade oferece: shows, musicais, espetáculos de teatro e dança, cinema, festas, saraus e manifestações tradicionais e populares, entre outras. Além de acompanhar a agenda de eventos, você também pode colaborar na gestão da cultura da cidade, para isso basta criar seu perfil de agente cultural e a partir deste cadastro, participar dos editais da Fundação Municipal de Cultura e divulgar seus eventos, espaços ou projetos. Contato: mapaculturalbh@gmail.com",

            'home: events' => "Você pode pesquisar eventos culturais nos campos de busca combinada. Como usuário cadastrado, você pode incluir seus eventos na plataforma e divulgá-los gratuitamente.",
            'home: agents' => "Você pode colaborar na gestão da cultura com suas próprias informações, preenchendo seu perfil de agente cultural. Neste espaço, estão registrados artistas, gestores e produtores; uma rede de atores envolvidos na cena cultural da região. Você pode cadastrar um ou mais agentes (grupos, coletivos, bandas instituições, empresas, etc.), além de associar ao seu perfil eventos e espaços culturais com divulgação gratuita.",
            'home: spaces' => "Procure por espaços culturais incluídos na plataforma, acessando os campos de busca combinada que ajudam na precisão de sua pesquisa. Cadastre também os espaços onde desenvolve suas atividades artísticas e culturais.",
            'home: projects' => "Reúne projetos culturais ou agrupa eventos de todos os tipos. Neste espaço, você encontra leis de fomento, mostras, convocatórias e editais criados, além de diversas iniciativas cadastradas pelos usuários da plataforma. Cadastre-se e divulgue seus projetos.",
            'home: home_devs' => 'Existem algumas maneiras de desenvolvedores interagirem com o Mapas Culturais. A primeira é através da nossa <a href="https://github.com/hacklabr/mapasculturais/blob/develop/documentation/docs/mc_config_api.md" target="_blank">API</a>. Com ela você pode acessar os dados públicos no nosso banco de dados e utilizá-los para desenvolver aplicações externas. Além disso, o Mapas Culturais é construído a partir do sofware livre <a href="http://institutotim.org.br/project/mapas-culturais/" target="_blank">Mapas Culturais</a>, criado em parceria com o <a href="http://institutotim.org.br" target="_blank">Instituto TIM</a>, e você pode contribuir para o seu desenvolvimento através do <a href="https://github.com/hacklabr/mapasculturais/" target="_blank">GitHub</a>.',

            'search: verified results' => 'Resultados da Secretaria Municipal de Cultura',
            'search: verified' => "Verificados pela Secretaria Municipal de Cultura"
        ];
    }

    static function getThemeFolder() {
        return __DIR__;
    }

    function _init() {
        parent::_init();
        $app = App::i();
        $app->hook('view.render(<<*>>):before', function() use($app) {
            $this->_publishAssets();
        });
    }

    protected function _publishAssets() {
        $this->jsObject['assets']['logo-instituicao'] = $this->asset('img/logo-instituicao.png', false);
    }

}
