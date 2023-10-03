<?php

namespace App\Tests\Api;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;

class CharacterClassTest extends ApiTestCase
{
    public function testCreateCharacterClass(): void
    {
        static::createClient()->request('POST', '/character_class', ['json' => [
            'name' => 'Developer',
        ]]);

        $this->assertResponseStatusCodeSame(201);
        $this->assertJsonContains([
            '@context' => '/contexts/CharacterClass',
            '@type' => 'CharacterClass',
            'name' => 'Developer',
        ]);
    }
}
