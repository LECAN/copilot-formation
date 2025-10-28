<?php
// Unit tests for the GameSession class
// Utilise des Providers et couvre au moins 2 use cases par méthode, avec commentaires explicatifs.

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\GameSession;

class GameSessionTest extends TestCase
{
    /**
     * Provider for testConstructor
     * Cas 1 : session active, Cas 2 : session finished
     */
    public static function constructorProvider(): array
    {
        return [
            // Use case: active session
            ['sess1', new \DateTime('2025-10-28 10:00:00'), 'active'],
            // Use case: finished session
            ['sess2', new \DateTime('2025-10-28 12:00:00'), 'finished'],
        ];
    }

    /**
     * @dataProvider constructorProvider
     * Teste la construction d'une GameSession avec différents statuts
     */
    public function testConstructor($sessionId, $startDate, $status)
    {
        // Test GameSession creation
        $session = new GameSession($sessionId, $startDate, $status);
        $this->assertEquals($sessionId, $session->getSessionId());
        $this->assertEquals($startDate, $session->getStartDate());
        $this->assertNull($session->getEndDate());
        $this->assertEquals($status, $session->getStatus());
    }

    /**
     * Provider for testSetAndGetEndDate
     * Cas 1 : endDate après startDate, Cas 2 : endDate égale à startDate
     */
    public static function endDateProvider(): array
    {
        return [
            // Use case: endDate after startDate
            [new \DateTime('2025-10-28 10:00:00'), new \DateTime('2025-10-28 12:00:00')],
            // Use case: endDate equals startDate
            [new \DateTime('2025-10-28 10:00:00'), new \DateTime('2025-10-28 10:00:00')],
        ];
    }

    /**
     * @dataProvider endDateProvider
     * Teste la modification et la récupération de endDate
     */
    public function testSetAndGetEndDate($startDate, $endDate)
    {
        $session = new GameSession('sess', $startDate);
        $session->setEndDate($endDate);
        $this->assertEquals($endDate, $session->getEndDate());
    }

    /**
     * Provider for testSetAndGetStatus
     * Cas 1 : status finished, Cas 2 : status cancelled
     */
    public static function statusProvider(): array
    {
        return [
            // Use case: set status to finished
            ['finished'],
            // Use case: set status to cancelled
            ['cancelled'],
        ];
    }

    /**
     * @dataProvider statusProvider
     * Teste la modification et la récupération du status
     */
    public function testSetAndGetStatus($status)
    {
        $session = new GameSession('sess', new \DateTime('2025-10-28 10:00:00'));
        $session->setStatus($status);
        $this->assertEquals($status, $session->getStatus());
    }
}
