<?php

class Careassessment extends CI_Controller {

    public function index( $area = 'careassessment', $page = 'history') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }
        $this->history();

    }

    public function history( $area = 'careassessment', $page = 'history', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_a_details( $area = 'careassessment', $page = 'section_a_details', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_a_edit( $area = 'careassessment', $page = 'section_a_edit', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_b_details( $area = 'careassessment', $page = 'section_b_details', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_b_edit( $area = 'careassessment', $page = 'section_b_edit', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_c_details( $area = 'careassessment', $page = 'section_c_details', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_c_edit( $area = 'careassessment', $page = 'section_c_edit', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_d_details( $area = 'careassessment', $page = 'section_d_details', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_d_edit( $area = 'careassessment', $page = 'section_d_edit', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_e_details( $area = 'careassessment', $page = 'section_e_details', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_e_edit( $area = 'careassessment', $page = 'section_e_edit', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_f_details( $area = 'careassessment', $page = 'section_f_details', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_f_edit( $area = 'careassessment', $page = 'section_f_edit', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_g_details( $area = 'careassessment', $page = 'section_g_details', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_g_edit( $area = 'careassessment', $page = 'section_g_edit', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_h_details( $area = 'careassessment', $page = 'section_h_details', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_h_edit( $area = 'careassessment', $page = 'section_h_edit', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_i_details( $area = 'careassessment', $page = 'section_i_details', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_i_edit( $area = 'careassessment', $page = 'section_i_edit', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_j_details( $area = 'careassessment', $page = 'section_j_details', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function section_j_edit( $area = 'careassessment', $page = 'section_j_edit', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else if ($user == 'admin') {
                $data['layout'] = $layout;
                $data['page'] = $page;
                $data['area'] = $area;
                $data['topnavtab'] = $topnavtab;
                $this->load->helper('url');
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }
}