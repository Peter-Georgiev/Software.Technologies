<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Report
 *
 * @ORM\Table(name="reports",
 *     options={"collate":"utf8_general_ci", "charset":"utf8", "engine":"InnoDB"})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReportRepository")
 */
class Report
{
    //TODO: Implement me ...
    /*
        •   id – technology-dependent identifier (ObjectID for JavaScript, int for all other technologies)
        •	status – non-empty text (will either be “Normal”, “Warning” or “Critical”).
        •	message – non-empty text
        •	origin – non-empty text

     */

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="status" , type="string", length=255, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="message" , type="string", length=10000, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="origin" , type="string", length=255, nullable=false)
     */
    private $origin;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Report
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Report
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Report
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     * @return Report
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }
}

