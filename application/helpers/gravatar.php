<php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* CodeIgniter Gravatar Helper
*
* @package      CodeIgniter
* @subpackage   Helpers
* @category     Helpers
* @author       Drew Johnston
* @link         http://drewjoh.com
*/

/**
* Gravatar
*
* Fetches a gravatar from the Gravatar website using the specified params
*
* @access  public
* @param   string
* @param   string
* @param   integer
* @param   string
* @return  string
*/
function gravatar( $email, $size = null, $rating = null, $default = 'mm' ) 
{
    
    # Return the generated URL
        # If we are using SSL, get it from a secure URL
        # Lowercase, trim and MD5 hash the e-mail
        # Only show options if they're set (defaults will be used otherwise)

    return ($_SERVER['HTTPS'] ? 'https' : 'http')
        .'://gravatar.com/avatar/'
        .md5( strtolower( trim( $email )))
        .'?'
        .($rating != null ? '&r='.$rating : '')
        .($size != null ? '&s='.$size : '')
        .($default != null ? '&d='.$default : '');
}

/**
* Gravatar_img
*
* Fetches a gravatar from the Gravatar website using the specified params and returns the <img> 
*
* @access  public
* @param   string
* @param   string
* @param   integer
* @param   string
* @return  string
*/
function gravatar_img($email, $size = null, $rating = null, $default = 'mm')
{
    return '<img src="'.gravatar($email, $size, $rating, $default).'" alt="Gravatar" />';
}

?>