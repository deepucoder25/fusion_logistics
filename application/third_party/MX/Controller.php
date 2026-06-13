<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['phone'] = '+91 9076021100';
        $this->comp['phonehtml'] = 'tel:+919076021100';
        $this->comp['phone1'] = '+91 0000000000';
        $this->comp['phonehtml1'] = 'tel:+910000000000';
        $this->comp['supportmail'] = 'support@mycompany.com';
        $this->comp['replyToMail'] = 'support@mycompany.com';
        $this->comp['mail'] = 'support@mycompany.com';    
        $this->comp['mailhtml'] = "mailto:support@mycompany.com";
        $this->comp['company3'] = 'Fusion Logistics Pvt. Ltd.';
        $this->comp['companydomain'] = 'fusionpackers.com';

        $this->comp['facebookhtml'] = "";
        $this->comp['youtubehtml'] = "";
        $this->comp['instagramhtml'] = "";
        $this->comp['twitterhtml'] = "";
        $this->comp['linkedinhtml'] = "";
        $this->comp['whatsapphtml'] = "https://wa.me/919076021100";

        $this->comp['address'] = "H. O. - Office No -2 , Vista Enclave Chs, Sector 2, Taloja Phase 1, Navi Mumbai -410208";
        $this->comp['address1'] = "H. O. - Office No -2 , Vista Enclave Chs";
        $this->comp['address2'] = "Sector 2, Taloja Phase 1, Navi Mumbai -410208";
        $this->comp['addressRegion'] = "Navi Mumbai";
        $this->comp['postalCode'] = "410208";
        $this->comp['companystate'] = "Maharashtra";
        $this->comp['themeColor'] = "#0e1b3d";

        $this->comp['experience'] = "15+";
        $this->comp['startYear'] = "2011";

        $this->comp['happyClients'] = "20,000+";
        $this->comp['successfulMoves'] = "20,000+";
        $this->comp['yearsExperience'] = "15+";
        $this->comp['secureShifting'] = "100%";
        $this->comp['statesCovered'] = "12+";

        $this->comp['sku'] = "PM28957";
        $this->comp['mpn'] = "SPM28957";
        // Review
        $this->comp['ratingValue'] = "4.9";
        $this->comp['ratingCount'] = "39850";
        $this->comp['datePublished'] = "15 May, 2026";
        $this->comp['reviewBody'] = "Best Packing And Moving Company in India.";
        $this->comp['reviewperson'] = "Arshad Ali";

        // Dynamic branch overrides for state-specific pages
        $state = '';
        if (CI::$APP->uri->rsegment(1) == 'packers_movers' && in_array(CI::$APP->uri->rsegment(2), array('state_services', 'city'))) {
            $state = CI::$APP->uri->rsegment(3);
        }

        if (!empty($state)) {
            $state = str_replace("_", " ", $state);
            $state = ucwords(str_replace("-", " ", $state));
            
            $st_lower = strtolower(trim($state));
            $branch_title = '';
            $branch_address = '';
            $branch_phone = '';
            $branch_phonehtml = '';
            $branch_email = '';
            $branch_emailhtml = '';
            $branch_manager = '';
            
            if (strpos($st_lower, 'maharashtra') !== false) {
                $branch_title = 'Mumbai Branch Office';
                $branch_address = 'Office No. 2, Vista Enclave CHS., Sector - 2, Taloja Phase - 1, Navi Mumbai - 410208.';
                $branch_phone = '9076012200';
                $branch_phonehtml = 'tel:+919076012200';
                $branch_email = 'aryan@fusionlogistics.in';
                $branch_emailhtml = 'mailto:aryan@fusionlogistics.in';
                $branch_manager = 'Aryan Choudhary (Business Head)';
            } elseif (strpos($st_lower, 'tamil') !== false) {
                $branch_title = 'Chennai Branch Office';
                $branch_address = 'Office No. 62, Micro Marble, 2nd Main Road, Balaji Nagar, Puzhal Kavangarai, Chennai, Tamilnadu- 600066.';
                $branch_phone = '9076018800';
                $branch_phonehtml = 'tel:+919076018800';
                $branch_email = 'sunilsharma@fusionlogistics.in';
                $branch_emailhtml = 'mailto:sunilsharma@fusionlogistics.in';
                $branch_manager = 'Sunil Sharma (Business Head)';
            } elseif (strpos($st_lower, 'delhi') !== false || strpos($st_lower, 'haryana') !== false) {
                $branch_title = 'Delhi / NCR Branch Office';
                $branch_address = '17/6, Delhi Mathura Road, Near Sarpunch Colony, Metro Pilor No. 763, Faridabad -121001';
                $branch_phone = '9076014400';
                $branch_phonehtml = 'tel:+919076014400';
                $branch_email = 'vikas@fusionlogistics.in';
                $branch_emailhtml = 'mailto:vikas@fusionlogistics.in';
                $branch_manager = 'Vikas Bharti (Business Head)';
            } elseif (strpos($st_lower, 'telangana') !== false) {
                $branch_title = 'Hyderabad Branch Office';
                $branch_address = 'Office Pl.No. 38, SY.NO. 94/P, Marri Ram Reddy Colony, Bowenpally, Secunderabad- 500011, Telangana.';
                $branch_phone = '9076016600';
                $branch_phonehtml = 'tel:+919076016600';
                $branch_email = 'somsing@fusionlogistics.in';
                $branch_emailhtml = 'mailto:somsing@fusionlogistics.in';
                $branch_manager = 'Som Singh (Business Head)';
            } elseif (strpos($st_lower, 'punjab') !== false) {
                $branch_title = 'Ludhiana Branch Office';
                $branch_address = 'Office 1371, MiG, Sector 32, Chandigarh Road, Ludhiana, Punjab - 141010.';
                $branch_phone = '9076015500';
                $branch_phonehtml = 'tel:+919076015500';
                $branch_email = 'aggarwal.krishan@fusionlogistics.in';
                $branch_emailhtml = 'mailto:aggarwal.krishan@fusionlogistics.in';
                $branch_manager = 'Krishan Agarwal (Business Head)';
            } elseif (strpos($st_lower, 'gujarat') !== false) {
                $branch_title = 'Ahmedabad Branch Office';
                $branch_address = 'Office A-123, Bijal Business Centre, Near Aslali Circle, Aslali, Ahmedabad, Gujarat - 382427.';
                $branch_phone = '9076023300';
                $branch_phonehtml = 'tel:+919076023300';
                $branch_email = 'sunilkumar@fusionlogistics.in';
                $branch_emailhtml = 'mailto:sunilkumar@fusionlogistics.in';
                $branch_manager = 'Sunil Choudhary (Business Head)';
            }
            
            if (!empty($branch_address)) {
                $this->comp['address'] = $branch_address;
                $this->comp['phone'] = $branch_phone;
                $this->comp['phonehtml'] = $branch_phonehtml;
                $this->comp['mail'] = $branch_email;
                $this->comp['mailhtml'] = $branch_emailhtml;
                
                $this->comp['branch_info'] = array(
                    'title' => $branch_title,
                    'address' => $branch_address,
                    'phone' => $branch_phone,
                    'phonehtml' => $branch_phonehtml,
                    'email' => $branch_email,
                    'emailhtml' => $branch_emailhtml,
                    'manager' => $branch_manager
                );
            } else {
                // If it's a state page but no branch exists, fallback to Head Office Navi Mumbai details
                $this->comp['address'] = 'Office No. 2, Vista Enclave CHS., Sector - 2, Taloja Phase - 1, Navi Mumbai - 410208.';
                $this->comp['phone'] = '9076012200';
                $this->comp['phonehtml'] = 'tel:9076012200';
                $this->comp['mail'] = 'aryan@fusionlogistics.in';
                $this->comp['mailhtml'] = 'mailto:aryan@fusionlogistics.in';
            }
        }

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }
}
