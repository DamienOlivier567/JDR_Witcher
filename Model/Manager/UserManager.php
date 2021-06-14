<?php

namespace Model\User;

use Model\DB;

use Model\Entity\User;

class UserManager {

    /**
     * Return a user based on id.
     * @param int $id
     * @return User
     */
    public function getUser(int $id): User {
        $DB = new DB();
        $sql = $DB::getInstance();
        $sql = $DB->getDbLink();
        $request = $sql->prepare("SELECT * FROM witcherjdr.user WHERE id = :id");
        $request->bindValue(':id', $id);
        $request->execute();
        $user_data = $request->fetch();
        $user = new User();
        if ($user_data) {
            $user->setId($user_data['id']);
            $user->setPseudo($user_data['pseudo']);
            $user->setEmail($user_data['email']);
            $user->setPassword('');
            $user->setRoleFk($user_data['role_fk']);
        }
        return $user;
    }

    /**
     * Return a users list.
     * @return array
     */
    public function getUsers(): array {
        $users = [];
        $request = DB::getInstance()->prepare("SELECT * FROM witcherjdr.user");
        $request->execute();
        $users_response = $request->fetchAll();
        if($users_response) {
            foreach($users_response as $data) {
                $users[] = new User($data['id'], $data['pseudo'], $data['email'], '', $data['role_fk']);
            }
        }
        return $users;
    }



    // If user's Id is null or equal to 0, that's an insert into DB
    public function saveUser(User $user)
    {
        if ($user->getId() === 0 || $user->getId() == null) {
            $request = DB::getInstance()->prepare("
        INSERT INTO user(pseudo, password, email, role_fk) VALUES (:pseudo, :password, :email,:role_fk)
        ");

            $request->bindValue(':pseudo', $user->getPseudo());
            $request->bindValue(':password', password_hash($user->getPassword(), PASSWORD_DEFAULT));
            $request->bindValue(':email', $user->getEmail());
            $request->bindValue(':role_fk', $user->getRoleFk());

            $request->execute();

            if ($request) {
                echo "User saved in DB";
            }
        }
    }
    //Deleted User from DB
    public function delUser(User $user) {
        $request = DB::getInstance()->prepare("
        DELETE FROM user WHERE id = :id;
        ");
        $request->bindValue('id', $user->getId());

        $result = $request->execute();
        if ($result) {
            echo "User supprimé";
        }
    }


}