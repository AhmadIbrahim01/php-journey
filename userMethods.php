<?php

class Users {

    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public static function checkPassword($password) {
        if (strlen($password) < 12) {
            return "Password must be at least 12 characters long.";
        }

        $has_uppercase = false;
        $has_lowercase = false;
        $has_special_character = false;
    
        for ($i = 0; $i < strlen($password); $i++) {
            $char = $password[$i];
    
            if (ctype_upper($char)) {
                $has_uppercase = true;
            }
            if (ctype_lower($char)) {
                $has_lowercase = true;
            }
            if (!ctype_alnum($char)) {
                $has_special_character = true;
            }
        }
    
        if (!$has_uppercase) {
            return "$password => No upper case letters";
        }
        if (!$has_lowercase) {
            return "$password => No lower case letters.";
        }
        if (!$has_special_character) {
            return "$password => No special characetes";
        }
    
        return "$password => Password is valid.";
    }

    public static function checkEmail($email){
        $is_valid = "";
    
        $email_partition = explode('@', $email, 2);
    
        if (count($email_partition) == 2) {
            $first_part = $email_partition[0];
            $second_part = $email_partition[1];
    
            if (
                $second_part != "" &&
                $first_part != "" &&
                substr_count($first_part, " ") == 0 &&
                $first_part[0] != "." &&
                $first_part[-1] != "." &&
                $second_part[0] != "." &&
                $second_part[-1] != "." &&
                substr_count($second_part, " ") == 0 &&
                substr_count($second_part, "..") == 0 &&
                substr_count($second_part, ".") >= 1 &&
                substr_count($second_part, "@") == 0
            ) {
                $is_valid = true;
                return "$email => is a valid email\n";
            } else {
                $is_valid = false;
                return "$email => is not a valid email\n";
            }
        } else {
            $is_valid = false;
            return "$email => is not a valid email\n";
        }
    }

    public function copy_with($new_email = null, $new_password = null) {
        $updated_email = $new_email ?? $this->email;
        $updated_password = $new_password ?? $this->password;

        return new Users($updated_email, $updated_password);
    }
    
}

$email = "ahmad@gm@ail.com";
$password = "ahmad123321I@";

$user = new Users($email, $password);

$password_result = Users::checkPassword($password);
$email_result = Users::checkEmail($email);
echo $password_result."<br>\n";
echo $email_result;

?>
