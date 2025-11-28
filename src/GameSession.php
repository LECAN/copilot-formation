<?php
// Classe représentant une session de jeu

namespace App;

class GameSession
{
    // Unique session identifier
    private string $sessionId;
    // Session start date and time
    private \DateTime $startDate;
    // Session end date and time (nullable)
    private ?\DateTime $endDate;
    // Session status (e.g., active, finished)
    private string $status;

    public function __construct(string $sessionId, \DateTime $startDate, string $status = 'active')
    {
        $this->sessionId = $sessionId;
        $this->startDate = $startDate;
        $this->endDate = null;
        $this->status = $status;
    }

    // Get the session ID
    public function getSessionId(): string
    {
        return $this->sessionId;
    }

    // Get the session start date
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    // Get the session end date
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    // Set the session end date
    public function setEndDate(\DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }

    // Get the session status
    public function getStatus(): string
    {
        return $this->status;
    }

    // Set the session status
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}

