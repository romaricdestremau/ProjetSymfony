<?php
namespace ContentBundle\Util;

use ContentBundle\Entity\Category;
use FOS\UserBundle\Doctrine\UserManager as FOSUserManager;
use ContentBundle\Entity\User;
use Doctrine\ORM\EntityManager;

/**
 * User management
 *
 * [CREATE, UPDATE, GET, DELETE]
 */
class UserManager
{
    private $um;
    private $em;
    private $currentUser;

    public function __construct(FOSUserManager $um, EntityManager $em, $currentUser)
    {
        $this->um = $um;
        $this->em = $em;
        $this->currentUser = $currentUser;
    }

    /**
     * Create a user
     * @param  String $username
     * @param  String $email
     * @param  String $plain_password
     * @param  array  $roles
     * @return void
     */
    public function create(
        $username,
        $email,
        $plain_password,
        $roles = array(),
        $enabled = false
    ) {
        // @Todo Make the create method
        //       Create a user using the FOSUserManager ($this->um)
        $user = new User();
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPlainPassword($plain_password);
        $user->setRoles($roles);
        $user->setEnabled($enabled);

        $this->em->persist($user);
        $this->em->flush();

    }

    public function update($user)
    {
        $this->em->updateUser($user);
    }

    /**
     * Get a user or all users
     * @param  Integer $id
     * @return User|User[]
     */
    public function get($id = NULL)
    {
        // @Todo Make the get method
        //       Find a user from ID or get all users, then return
        $user = $this->getDoctrine()->getRepository(Category::class)->find($id);
        if (!$user) {
            $user = $this->getDoctrine()->getRepository(Category::class)->findAll();
            return $user;
        }
        return $user;
    }

    public function getCurrent()
    {
        return $this->currentUser;
    }

    /**
     * Delete a user
     * @param  Integer $id
     * @return void
     */
    public function delete($id)
    {
        // @Todo Make the delete method
        //       Delete a user
        $em->remove($id);
        $em->flush();
    }
}
