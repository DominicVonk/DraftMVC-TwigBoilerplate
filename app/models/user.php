<?php
class User extends \DraftMVC\DraftModel {
    public function __set($variable, $value) {

        if ($variable === 'password') {
            $this->data['salt'] = Password::generateSalt();
            $this->data[$variable] = Password::create($value, $this->data['salt']);
        } else {
            parent::__set($variable, $value);
        }
        
    }
}
