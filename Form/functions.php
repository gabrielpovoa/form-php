<?php
/**
* Check if login form is well filled and redirect to profile page
* if so, otherwise redirect to form page.
*
* @param string $name
* @param string $email
* @param string $password
* @param string $newsletter
* @return never
*/

function loginSent( $name, $email, $password, $newsletter ): never 
 {
    if ( !empty( $name ) && !empty( $email ) && !empty( $password ) ) {

        $_SESSION[ 'name' ] = $name;
        $_SESSION[ 'email' ] = $email;
        $_SESSION[ 'password' ] = $password;
        $_SESSION[ 'newsletter' ] = $newsletter;

        header( 'Location: profile.php' );
        exit();
    } else {
        $_SESSION[ 'error' ] = '⚠️ Email or password wrong';
        header( 'Location: index.php' );
        exit();
    }
}

/**
* Return the first letter of the first name and the first letter of the last name.
*
* @param string $name Full name
*
* @return string First letter of first name and first letter of last name
*/

function getInitialLettersName( $name ): string 
 {
    return strtoupper( substr( $name, 0, 1 ) . substr( strrchr( $name, ' ' ), 1, 1 ) );
}

/**
* Check and manage the session state.
*
* Unsets the 'error' session variable if it exists, and redirects
* to the form page if the 'name' session variable is not set.
* Returns an associative array containing session data for 'name',
* 'email', 'password', and 'newsletter'.
*
* @return array Associative array of session data
*/

function checkSession(): array 
 {
    if ( isset( $_SESSION[ 'error' ] ) ) {
        unset( $_SESSION[ 'error' ] );
    }

    if ( !isset( $_SESSION[ 'name' ] ) ) {
        header( 'Location: ./index.php' );
        exit();
    }

    return [
        'name' => $_SESSION[ 'name' ],
        'email' => $_SESSION[ 'email' ],
        'password' => $_SESSION[ 'password' ] ?? '',
        'newsletter' => $_SESSION[ 'newsletter' ]
    ];
}

/**
 * Destroys the current session and redirects to the form page.
 *
 * Intended use is to log out the current user.
 */
function logOutProfile()
 {
    session_destroy();
    header( 'Location: ./index.php' );
    exit();
}
