<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('items')->delete();

        \DB::table('items')->insert(array (
            0 =>
                array (
                    'type' => '1',
                    'name' => 'Ancient Ghostatue',
                    'effects' => '+920 HP +70 HP Regen +5 Cooldown Reduction',
                    'uniEffects' => ' Unique Passive Runner On leaving combat, movement speed will increase by 60.',
                ),
            1 =>
                array (
                    'type' => '2',
                    'name' => 'Arcane Boots',
                    'effects' => '+15 Magic Damage Reduction',
                    'uniEffects' => ' Unique Effect  +40 Movement Speed',
                ),
            2 =>
                array (
                    'type' => '1',
                    'name' => 'Ares Belt',
                    'effects' => '+770 HP',
                    'uniEffects' => '',
                ),
            3 =>
                array (
                    'type' => '1',
                    'name' => 'Athena’s Shield',
                    'effects' => '+900 HP +56 Magic Resistance +20 HP Regen',
                    'uniEffects' => ' Unique Passive Shield Get a damage-absorbing shield every 30s. Shield absorption amount grows as the match goes on, maxing out at 1150.',
                ),
            4 =>
                array (
                    'type' => '3',
                    'name' => 'Azure Blade',
                    'effects' => '+25 Magic Power +300 Mana',
                    'uniEffects' => ' Unique Passive Judgement After using a skill, the next basic attack deals 50 extra true damage with a cooldown of 1.5s.',
                ),
            5 =>
                array (
                    'type' => '4',
                    'name' => 'Beast Killer',
                    'effects' => '+20 Armor +20 Magic Resistance',
                    'uniEffects' => ' Unique Effect  +30% Damage to Monsters Unique Passive Greed Get an extra 30% Exp when jungling. Regain 4% of maximum health and 10% of mana after monster kill. Unique Passive Gorge Slaying jungle monsters increases one\'s physical and magic defense 3. Stacks up to 10 times. Unique Passive Makes the battle spell \'Retribution\' applicable to heroes Reduces target\'s 70% of movement speed (the effect will decay within 3s) and within a short period of time receive a shield that scales off maximum health. Buying other advanced jungle gear will disable this effect.',
                ),
            6 =>
                array (
                    'type' => '5',
                    'name' => 'Berserker’s Fury',
                    'effects' => '+65 Physical Attack +25 Critical Strike Chance',
                    'uniEffects' => ' Unique Effect  +40% Crit Damage Unique Passive Doom Crit strikes will increase one\'s physical attack 5%, lasting 2s.',
                ),
            7 =>
                array (
                    'type' => '1',
                    'name' => 'Black Ice Shield',
                    'effects' => '+400 Mana +22 Armor +10 Cooldown Reduction',
                    'uniEffects' => '',
                ),
            8 =>
                array (
                    'type' => '1',
                    'name' => 'Blade Armor',
                    'effects' => '+90 Armor',
                    'uniEffects' => ' Unique Passive Counterstrike Deals 25% of opponent\'s physical attack as physical damage to an attacker when a basic attack is received.',
                ),
            9 =>
                array (
                    'type' => '5',
                    'name' => 'Blade of Despair',
                    'effects' => '+170 Physical Attack +10 Attack Speed',
                    'uniEffects' => ' Unique Passive Despair Deals an extra damage 10% to an enemy in any abnormal state (stunned, knocked airborne, transformed, disabled).',
                ),
            10 =>
                array (
                    'type' => '5',
                    'name' => 'Blade of the 7 Seas',
                    'effects' => '+75 Physical Attack +300 HP',
                    'uniEffects' => ' Unique Passive Steamroll Skills will lower the target\'s physical defence by 25 points (applied before damage), lasts for 3 seconds.',
                ),
            11 =>
                array (
                    'type' => '3',
                    'name' => 'Blood Wings',
                    'effects' => '+150 Magic Power +150 HP',
                    'uniEffects' => ' Unique Passive Nirvana Adds 2 HP for every 1 pt of magic power added.',
                ),
            12 =>
                array (
                    'type' => '5',
                    'name' => 'Bloodlust Axe',
                    'effects' => '+70 Physical Attack +10 Cooldown Reduction',
                    'uniEffects' => ' Unique Effect Bloodthirsty +20% Spell Vamp',
                ),
            13 =>
                array (
                    'type' => '1',
                    'name' => 'Bloodthirsty King',
                    'effects' => '+1550 HP',
                    'uniEffects' => ' Unique Passive Bloodlust A kill or assist regens 20% of hero\'s HP within 5 seconds. 10s cooldown.',
                ),
            14 =>
                array (
                    'type' => '3',
                    'name' => 'Book of Sages',
                    'effects' => '+8 Magic Power +5 Cooldown Reduction',
                    'uniEffects' => '',
                ),
            15 =>
                array (
                    'type' => '2',
                    'name' => 'Boots',
                    'effects' => '',
                    'uniEffects' => ' Unique Effect  +20 Movement SPD',
                ),
            16 =>
                array (
                    'type' => '2',
                    'name' => 'Boots of Tranquility',
                    'effects' => '+20 HP Regen +20 Mana Regen',
                    'uniEffects' => ' Unique Effect  +40 Movement SPD Unique Passive Bless HP regen effect increased by 10%',
                ),
            17 =>
                array (
                    'type' => '1',
                    'name' => 'Brute Force Breastplate',
                    'effects' => '+770 HP +45 Armor',
                    'uniEffects' => ' Unique Passive Brute Force Attacking an enemy will increase one\'s capabilities, increasing movement speed 2% and physical attack 3%. This effect lasts 4s and can stack up to 4 times.',
                ),
            18 =>
                array (
                    'type' => '3',
                    'name' => 'Calamity Reaper',
                    'effects' => '+70 Magic Power +400 Mana +10 Cooldown Reduction',
                    'uniEffects' => ' Unique Passive Calamity After using a skill, the next basic attack deals extra true damage equal to 120% magic attack with a cooldown of 1.5s.',
                ),
            19 =>
                array (
                    'type' => '3',
                    'name' => 'Clock of Destiny',
                    'effects' => '+60 Magic Power +615 HP +600 Mana',
                    'uniEffects' => ' Unique Passive Time Adds 30 HP and 5 magic attack every 30s. Up to 10 times. Unique Passive Reincarnate If Time is fully stacked, then the hero will receive 5% magic attack and 300 mana.',
                ),
            20 =>
                array (
                    'type' => '3',
                    'name' => 'Concentrated Energy',
                    'effects' => '+70 Magic Power +700 HP',
                    'uniEffects' => ' Unique Effect  30% Spell Vamp Unique Passive Recharge Regen 10% of one\'s HP after killing a hero.',
                ),
            21 =>
                array (
                    'type' => '5',
                    'name' => 'Corrosion Scythe',
                    'effects' => '+50 Physical Attack +400 HP +15 Attack Speed',
                    'uniEffects' => ' Unique Passive Corrosion Basic attacks lower the target\'s attack by 10% and have a 50% chance to reduce the target\'s movement speed by 35%. Unique Passive Impulse Dealing damage with basic attacks increase your physical attack by 2%, up to a maximum of 6%. Lasts for 3s.',
                ),
            22 =>
                array (
                    'type' => '1',
                    'name' => 'Courage Bulwark',
                    'effects' => '+770 HP +45 HP Regen',
                    'uniEffects' => ' Unique Passive Bravery Increases 10% of attack power and defense for nearby allies. Unique Passive Heavy Armor Nearby soldiers can take more defense turret damage.',
                ),
            23 =>
                array (
                    'type' => '4',
                    'name' => 'Curse Sword',
                    'effects' => '',
                    'uniEffects' => ' Unique Effect  +30% Damage to Monsters Unique Passive Greed Get an extra 30% Exp when jungling. Regain 4% of maximum health and 10% of mana after monster kill. Unique Passive Gorge Increases damage by 0.5% on killing a jungle monster, stacking up to 2 times. Unique Passive Makes the battle spell \'Retribution\' applicable to heroes Reduces target\'s 70% of movement speed (the effect will decay within 3s) and reduces target\'s magic resistance. Buying other advanced jungle gear will disable this effect.',
                ),
            24 =>
                array (
                    'type' => '1',
                    'name' => 'Cursed Helmet',
                    'effects' => '+920 HP +50 Magic Resistance',
                    'uniEffects' => ' Unique Passive Burning Soul Deals 1.5% of one\'s max HP as magic damage per second to nearby enemies, and deals extra 50% of damage to minions.',
                ),
            25 =>
                array (
                    'type' => '5',
                    'name' => 'Dagger (Attack Speed)',
                    'effects' => '+10 Attack Speed',
                    'uniEffects' => '',
                ),
            26 =>
                array (
                    'type' => '5',
                    'name' => 'Dagger (Physical Attack)',
                    'effects' => '+15 Physical Attack',
                    'uniEffects' => '',
                ),
            27 =>
                array (
                    'type' => '5',
                    'name' => 'Deadly Blade',
                    'effects' => '+60 Physical Attack +15 Attack Speed',
                    'uniEffects' => ' Unique Passive Life Drain Basic attack reduces HP regen effect by 50% for 3s.',
                ),
            28 =>
                array (
                    'type' => '5',
                    'name' => 'Demon Hunter Sword',
                    'effects' => '+35 Physical Attack +25 Attack Speed',
                    'uniEffects' => ' Unique Passive Devour Basic attacks will deal 10% of the target\'s current HP as additional physical damage (up to 60 against monsters). Unique Passive Devour Each basic attack grants 4% health stealing for 4s, up to 3 times.',
                ),
            29 =>
                array (
                    'type' => '1',
                    'name' => 'Demon Wings',
                    'effects' => '+15 Physical Attack +770 HP',
                    'uniEffects' => ' Unique Passive Demonize Increases attack 40 when HP drops below 40%.',
                ),
            30 =>
                array (
                    'type' => '1',
                    'name' => 'Demon’s Advent',
                    'effects' => '+920 HP +54 Armor +30 HP Regen',
                    'uniEffects' => ' Unique Passive Deter When an enemy hero attacks, this ability will reduce his/her attack power 6%. This effect lasts 2s and can stack up to 3 times.',
                ),
            31 =>
                array (
                    'type' => '3',
                    'name' => 'Devil Tears',
                    'effects' => '+65 Magic Power',
                    'uniEffects' => ' Unique Effect Spellbreaker +40% Magical PEN Unique Passive Spellbreaker When HP is higher than 70%, the  Unique bonus effect is increased by 30%.',
                ),
            32 =>
                array (
                    'type' => '3',
                    'name' => 'Disaster Truncheon',
                    'effects' => '+60 Magic Power +50 Magic Resistance',
                    'uniEffects' => ' Unique Passive The Dead When skills cause damage to target, will reduce 25 points of magic resistance for the target, lasting 5s.',
                ),
            33 =>
                array (
                    'type' => '1',
                    'name' => 'Dominance Ice',
                    'effects' => '+500 Mana +70 Armor +5 Crit Strike Rate Reduction',
                    'uniEffects' => ' Unique Effect  +15% Cooldown Reduction Unique Passive Arctic Cold Lowers movement speed 5% and lowers attack speed 30% for nearby enemy heroes.',
                ),
            34 =>
                array (
                    'type' => '1',
                    'name' => 'Dreadnaught Armor',
                    'effects' => '+40 Armor',
                    'uniEffects' => ' Unique Passive Deter When an enemy hero attacks, this ability will reduce his/her attack power 4%. This effect lasts 2s and can stack up to 3 times.',
                ),
            35 =>
                array (
                    'type' => '3',
                    'name' => 'Elegant Gem',
                    'effects' => '+300 HP +380 Mana',
                    'uniEffects' => ' Unique Passive Gift Regens 20% HP and Mana within 2s of leveling up.',
                ),
            36 =>
                array (
                    'type' => '3',
                    'name' => 'Enchanted Talisman',
                    'effects' => '+55 Magic Power +250 HP +20 Cooldown Reduction',
                    'uniEffects' => ' Unique Passive Mana Spring Regen 10% total of one\'s max mana every 10s.',
                ),
            37 =>
                array (
                    'type' => '5',
                    'name' => 'Endless Battle',
                    'effects' => '+65 Physical Attack +25 Magic Power +250 HP +300 Mana +5 Movement Speed +15 Lifesteal',
                    'uniEffects' => ' Unique Passive Divine Justice After using an ability, the next basic attack will deal additional 70% of physical attack as true damage. This effect has a cooldown of 1.5s. Unique Passive Chase Fate When Divine Justice\'s effect is triggered, it will increase the hero\'s movement speed 15%.',
                ),
            38 =>
                array (
                    'type' => '3',
                    'name' => 'Exotic Veil',
                    'effects' => '+30 Magic Power +5 Movement Speed',
                    'uniEffects' => ' Unique Effect  +15 Magical PEN',
                ),
            39 =>
                array (
                    'type' => '3',
                    'name' => 'Feather of Heaven',
                    'effects' => '+65 Magic Power +30 Attack Speed',
                    'uniEffects' => ' Unique Passive Affliction Basic attacks will deal 40% of hero\'s AP as additional magic damage. Unique Passive Derive Increases Spell Vamp effect by additional 8%.',
                ),
            40 =>
                array (
                    'type' => '3',
                    'name' => 'Fleeting Time',
                    'effects' => '+70 Magic Power +15 Mana Regen +10 Cooldown Reduction',
                    'uniEffects' => ' Unique Passive Timestream After killing an enemy hero, immediately reduces 20% of current reuse time for all abilities.',
                ),
            41 =>
                array (
                    'type' => '5',
                    'name' => 'Fury Hammer',
                    'effects' => '+35 Physical Attack',
                    'uniEffects' => ' Unique Effect  +12 Physical PEN',
                ),
            42 =>
                array (
                    'type' => '3',
                    'name' => 'Glowing Wand',
                    'effects' => '+75 Magic Power +5 Movement Speed +15 Magic Penetration',
                    'uniEffects' => ' Unique Passive Scorch Burns the target for 3s when the skills hit, dealing 2%/2.5%/3% of the target\'s current HP as magic damage, at least 10 pts.',
                ),
            43 =>
                array (
                    'type' => '5',
                    'name' => 'Haas’s Claws',
                    'effects' => '+70 Physical Attack',
                    'uniEffects' => ' Unique Effect Insanity +20% Lifesteal Unique Passive Insanity When HP drops below 40%, the hero will receive an extra 10% physical lifesteal.',
                ),
            44 =>
                array (
                    'type' => '1',
                    'name' => 'Healing Necklace',
                    'effects' => '+20 HP Regen',
                    'uniEffects' => '',
                ),
            45 =>
                array (
                    'type' => '1',
                    'name' => 'Heart of Steel',
                    'effects' => '+880 HP +30 Armor +35 HP Regen',
                    'uniEffects' => ' Unique Effect  +20% Crit Chance Reduction',
                ),
            46 =>
                array (
                    'type' => '1',
                    'name' => 'Hero’s Ring',
                    'effects' => '+150 HP +5 Cooldown Reduction',
                    'uniEffects' => '',
                ),
            47 =>
                array (
                    'type' => '3',
                    'name' => 'Holy Crystal',
                    'effects' => '+90 Magic Power',
                    'uniEffects' => ' Unique Effect  +25% Magic Power Unique Passive Exterminate After a skill hits a target, magic attack will immediately increase 15%. The next skill damage will terminate this effect. This effect can last up to 3s with a built in cooldown time of 10s.',
                ),
            48 =>
                array (
                    'type' => '5',
                    'name' => 'Hunter Strike',
                    'effects' => '+100 Physical Attack +10 Cooldown Reduction',
                    'uniEffects' => ' Unique Passive Hunt Attacks the enemy 5 times in a row and improves the hero\'s movement speed by 30% for 2s. This effect has a cooldown of 15s.',
                ),
            49 =>
                array (
                    'type' => '4',
                    'name' => 'Hunter’s Knife',
                    'effects' => '',
                    'uniEffects' => ' Unique Effect  +20% Damage to Monsters Unique Passive Greed Get extra 15% exp when jungling',
                ),
            50 =>
                array (
                    'type' => '3',
                    'name' => 'Ice Queen Wand',
                    'effects' => '+75 Magic Power +15 Mana Regen +7 Movement Speed',
                    'uniEffects' => ' Unique Passive Ice Bound Skills that damage an enemy hero will carry a 15% slow down effect. This effect lasts 3s and can stack up to 2 times.',
                ),
            51 =>
                array (
                    'type' => '1',
                    'name' => 'Immortality',
                    'effects' => '+800 HP +40 Magic Resistance',
                    'uniEffects' => ' Unique Passive Immortal 2s after dying and get 15% HP and a shield that can absorb 300~1000 pts of damage. Shield lasts for 3s. Cooldown for this effect is 180s.',
                ),
            52 =>
                array (
                    'type' => '5',
                    'name' => 'Iron Hunting Bow',
                    'effects' => '+10 Physical Attack +5 Cooldown Reduction',
                    'uniEffects' => '',
                ),
            53 =>
                array (
                    'type' => '5',
                    'name' => 'Javelin',
                    'effects' => '+8 Critical Strike Chance',
                    'uniEffects' => '',
                ),
            54 =>
                array (
                    'type' => '1',
                    'name' => 'Leather Jerkin',
                    'effects' => '+18 Armor',
                    'uniEffects' => '',
                ),
            55 =>
                array (
                    'type' => '5',
                    'name' => 'Legion Sword',
                    'effects' => '+60 Physical Attack',
                    'uniEffects' => '',
                ),
            56 =>
                array (
                    'type' => '3',
                    'name' => 'Lightning Truncheon',
                    'effects' => '+75 Magic Power +30 Mana Regen',
                    'uniEffects' => ' Unique Passive Resonate Every 6 seconds your next damaging magical ability will proc, maximum of 3 enemies will be hurt by 150% magic power damage.',
                ),
            57 =>
                array (
                    'type' => '5',
                    'name' => 'Magic Blade',
                    'effects' => '+40 Physical Attack +24 Magic Resistance',
                    'uniEffects' => ' Unique Passive Lifeline Gain a shield that can absorb 280~700 damage (Increases with level) when HP is below 30%. The effect has a 30 second cooldown.',
                ),
            58 =>
                array (
                    'type' => '3',
                    'name' => 'Magic Necklace',
                    'effects' => '+10 Mana Regen',
                    'uniEffects' => '',
                ),
            59 =>
                array (
                    'type' => '3',
                    'name' => 'Magic Potion',
                    'effects' => '',
                    'uniEffects' => ' Unique Passive Increase Power Automatically used after purchased, giving 30 pts of magic power, 5% of cooldown reduction, lasts 120s. Only one potion effect can be used at any one time.',
                ),
            60 =>
                array (
                    'type' => '1',
                    'name' => 'Magic Resist Cloak',
                    'effects' => '+18 Magic Resistance',
                    'uniEffects' => '',
                ),
            61 =>
                array (
                    'type' => '2',
                    'name' => 'Magic Shoes',
                    'effects' => '+10 Cooldown Reduction',
                    'uniEffects' => ' Unique Effect  +40 Movement SPD',
                ),
            62 =>
                array (
                    'type' => '3',
                    'name' => 'Magic Wand',
                    'effects' => '+45 Magic Power',
                    'uniEffects' => '',
                ),
            63 =>
                array (
                    'type' => '5',
                    'name' => 'Malefic Roar',
                    'effects' => '+60 Physical Attack',
                    'uniEffects' => ' Unique Effect  +40% Physical Penetration  Unique Passive Armor Buster Basic attack will ignore 20% of a defense turret\'s defensive armor.',
                ),
            64 =>
                array (
                    'type' => '1',
                    'name' => 'Molten Essence',
                    'effects' => '+540 HP',
                    'uniEffects' => ' Unique Passive Burning Soul Deals 1% of one\'s max HP as magic damage per second to nearby enemies, and deals extra 50% of damage to minions.',
                ),
            65 =>
                array (
                    'type' => '3',
                    'name' => 'Mystery Codex',
                    'effects' => '+15 Magic Power',
                    'uniEffects' => '',
                ),
            66 =>
                array (
                    'type' => '3',
                    'name' => 'Mystic Container',
                    'effects' => '+15 Magic Power +300 HP',
                    'uniEffects' => ' Unique Effect  +12% Spell Vamp',
                ),
            67 =>
                array (
                    'type' => '3',
                    'name' => 'Necklace of Durance',
                    'effects' => '+65 Magic Power +300 HP +5 Cooldown Reduction',
                    'uniEffects' => '',
                ),
            68 =>
                array (
                    'type' => '4',
                    'name' => 'Nimble Blade',
                    'effects' => '',
                    'uniEffects' => ' Unique Effect  +30% Damage to Monsters Unique Passive Greed Get an extra 30% Exp when jungling. Regain 4% of maximum health and 10% of mana after monster kill. Unique Passive Gorge Slaying jungle monsters increases your physical attack 4. Stacks up to 10 times. Unique Passive Makes the battle spell \'Retribution\' applicable to heroes Reduces target\'s 70% of movement speed (the effect will decay within 3s) and reduces target\'s magic resistance. Buying other advanced jungle gear will disable this effect.',
                ),
            69 =>
                array (
                    'type' => '5',
                    'name' => 'Ogre Tomahawk',
                    'effects' => '+30 Physical Attack +230 HP',
                    'uniEffects' => ' Unique Passive Angry Basic attacks will increase hero\'s movement speed 10%.',
                ),
            70 =>
                array (
                    'type' => '1',
                    'name' => 'Oracle',
                    'effects' => '+850 HP +36 Magic Resistance +35 HP Regen +10 Cooldown Reduction',
                    'uniEffects' => ' Unique Passive Scream Within 4s after being attacked, the hero will regen 8% HP. This effect has a 6s cooldown time.',
                ),
            71 =>
                array (
                    'type' => '4',
                    'name' => 'Pillager Axe',
                    'effects' => '',
                    'uniEffects' => ' Unique Effect  +30% Damage to Monsters Unique Passive Greed Get an extra 30% Exp when jungling. Regain 4% of maximum health and 10% of mana after monster kill. Unique Passive Gorge Slaying jungle monsters increases one\'s physical and magic defense 3. Stacks up to 10 times. Unique Passive Makes the battle spell \'Retribution\' applicable to heroes Reduces target\'s 70% of movement speed (the effect will decay within 3s) and within a short period of time receive a shield that scales off maximum health. Buying other advanced jungle gear will disable this effect.',
                ),
            72 =>
                array (
                    'type' => '3',
                    'name' => 'Power Crystal',
                    'effects' => '+300 Mana',
                    'uniEffects' => '',
                ),
            73 =>
                array (
                    'type' => '5',
                    'name' => 'Power Potion',
                    'effects' => '',
                    'uniEffects' => ' Unique Passive Increase Power Automatically used after purchased, giving 30 pts of physical attack, 5% of physical lifesteal, lasts 120s. Only one potion effect can be used at any one time.',
                ),
            74 =>
                array (
                    'type' => '2',
                    'name' => 'Rapid Boots',
                    'effects' => '',
                    'uniEffects' => ' Unique Effect  +50 Movement SPD',
                ),
            75 =>
                array (
                    'type' => '4',
                    'name' => 'Raptor Machete',
                    'effects' => '+30 Physical Attack',
                    'uniEffects' => ' Unique Effect  +15% Physical PEN Unique Effect Avarice +30% Damage to Monsters Unique Passive Greed Get an extra 30% Exp when jungling. Regain 4% of maximum health and 10% of mana after monster kill. Unique Passive Gorge Slaying jungle monsters increases your physical attack 4. Stacks up to 10 times. Unique Passive Makes the battle spell \'Retribution\' applicable to heroes Reduces target\'s 70% of movement speed (the effect will decay within 3s) and reduces target\'s magic resistance. Buying other advanced jungle gear will disable this effect.',
                ),
            76 =>
                array (
                    'type' => '5',
                    'name' => 'Regular Spear',
                    'effects' => '+20 Physical Attack +10 Attack Speed',
                    'uniEffects' => '',
                ),
            77 =>
                array (
                    'type' => '1',
                    'name' => 'Rock Potion',
                    'effects' => '',
                    'uniEffects' => ' Unique Passive Increase power Automatically used after purchased, giving 500 pts of max HP, 15% of resilience, lasts 120s. Only one potion effect can be used at any one time.',
                ),
            78 =>
                array (
                    'type' => '5',
                    'name' => 'Rogue Meteor',
                    'effects' => '+15 Attack Speed +10 Critical Strike Chance',
                    'uniEffects' => '',
                ),
            79 =>
                array (
                    'type' => '5',
                    'name' => 'Rose Gold Meteor',
                    'effects' => '+60 Physical Attack +30 Magic Resistance +5 Lifesteal',
                    'uniEffects' => ' Unique Passive Lifeline Gain a shield that can absorb 510~1350 damage (Increase with level) when HP is below 30%. The effect has a 30 second cooldown.',
                ),
            80 =>
                array (
                    'type' => '5',
                    'name' => 'Scarlet Phantom',
                    'effects' => '+30 Physical Attack +40 Attack Speed +10 Critical Strike Chance',
                    'uniEffects' => ' Unique Passive Frenzy Crit strikes will increase the hero\'s attack speed 25% and crit strike rate 5%, lasting 2s.',
                ),
            81 =>
                array (
                    'type' => '1',
                    'name' => 'Silence Robe',
                    'effects' => '+540 HP +24 Magic Resistance',
                    'uniEffects' => '',
                ),
            82 =>
                array (
                    'type' => '4',
                    'name' => 'Star Shard',
                    'effects' => '+30 Magic Power +25 Mana Regen',
                    'uniEffects' => ' Unique Effect  +30% Damage to Monsters Unique Passive Greed Get an extra 30% Exp when jungling. Regain 4% of maximum health and 10% of mana after monster kill. Unique Passive Gorge Increases damage by 0.5% on killing a jungle monster, stacking up to 2 times. Unique Passive Makes the battle spell \'Retribution\' applicable to heroes Reduces target\'s 70% of movement speed (the effect will decay within 3s) and reduces target\'s magic resistance. Buying other advanced jungle gear will disable this effect.',
                ),
            83 =>
                array (
                    'type' => '2',
                    'name' => 'Swift Boots',
                    'effects' => '+15 Attack Speed',
                    'uniEffects' => ' Unique Effect  +40 Movement SPD',
                ),
            84 =>
                array (
                    'type' => '1',
                    'name' => 'Thunder Belt',
                    'effects' => '+25 Magic Power +800 HP +400 Mana +40 Armor +15 HP Regen',
                    'uniEffects' => ' Unique Passive Thunderbolt After you use the skill, next basic attack will carry an extra 40% of physical attacks as true damage, and slow down the target and surrounding enemy units, lasts 1.5s. Effect can only be used once every 1.5s',
                ),
            85 =>
                array (
                    'type' => '3',
                    'name' => 'Tome of Evil',
                    'effects' => '+35 Magic Power +20 Mana Regen +8 Cooldown Reduction',
                    'uniEffects' => '',
                ),
            86 =>
                array (
                    'type' => '2',
                    'name' => 'Tough Boots',
                    'effects' => '+22 Magic Resistance',
                    'uniEffects' => ' Unique Effect  +40 Movement Speed Unique Passive Fortitude Reduces time controlled 25%',
                ),
            87 =>
                array (
                    'type' => '5',
                    'name' => 'Vampire Mallet',
                    'effects' => '+8 Physical Attack +8 Lifesteal',
                    'uniEffects' => '',
                ),
            88 =>
                array (
                    'type' => '1',
                    'name' => 'Vitality Crystal',
                    'effects' => '+230 HP',
                    'uniEffects' => '',
                ),
            89 =>
                array (
                    'type' => '2',
                    'name' => 'Warrior Boots',
                    'effects' => '+22 Armor',
                    'uniEffects' => ' Unique Effect  +40 Movement SPD Unique Passive Valor Physical defense will go up 5 with each basic attack received, for an increase of up to 25 points, lasting 3s.',
                ),
            90 =>
                array (
                    'type' => '5',
                    'name' => 'Windtalker',
                    'effects' => '+25 Attack Speed +20 Movement Speed +20 Critical Strike Chance',
                    'uniEffects' => ' Unique Passive Typhoon After every 4 basic attacks, the next basic attack must deal 125 magic damage to 3 enemies. Unique Passive Activate Each time Typhoon is cast, one\'s movement speed will be increased 5% for a short time.',
                ),
            91 =>
                array (
                    'type' => '1',
                    'name' => 'Wings of the Apocalypse Queen',
                    'effects' => '+15 Physical Attack +1000 HP +10 Cooldown Reduction',
                    'uniEffects' => ' Unique Passive Demonize Increases physical and magic defense 40% and physical lifesteal 15% when HP drops below 40%.',
                ),
            92 =>
                array (
                    'type' => '3',
                    'name' => 'Winter Truncheon',
                    'effects' => '+60 Magic Power +50 Armor',
                    'uniEffects' => ' Unique Passive Frozen When own hero\'s HP drops below 30% pts, being hit by basic attack will lower target\'s movement speed by 80% and deal 50% of magic power as magic damage to the target. This effect has a 5s cooldown.',
                ),
            93 =>
                array (
                    'type' => '2',
                    'name' => 'Wizard Boots',
                    'effects' => '+300 HP',
                    'uniEffects' => ' Unique Effect  +40 Movement Speed Unique Passive Plunder 80 gold will be awarded for assists.',
                ),
        ));
    }
}
