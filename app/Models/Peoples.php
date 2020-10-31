<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Peoples {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Sergio Agüero',
            'Borndate'=>'1988-3-5',
            'height'=>'173cm',
            'weight'=>'79kg',
            'country'=>'Argentina',
            'description' => 'Born in Buenos Aires, Argentina on June 2, 1988, Argentine professional football player.',
            'link' => 'https://baike.baidu.com/item/%E5%A1%9E%E5%B0%94%E5%B8%8C%E5%A5%A5%C2%B7%E9%98%BF%E5%9C%AD%E7%BD%97/24392011',
            'image' => 'aguiluo.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Kevin De Bruyne',
              'Borndate'=>'1991-6-5',
            'height'=>'185cm',
            'weight'=>'80kg',
            'country'=>'Belgium',
            'description' => 'Born in Dronen, Belgium on June 28, 1991, a Belgian football player who served as a midfielder.'
            . ' He once played for Genk Football Club, Wolfsburg Football Club, Chelsea Football Club, Bremen Football Club, and now plays for Manchester City Football Club.',
            'link' => 'https://baike.baidu.com/item/%E5%87%AF%E6%96%87%C2%B7%E5%BE%B7%E5%B8%83%E5%8A%B3%E5%86%85/5439527',
            'image' => 'debulaonei.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Cristiano Ronaldo ',
              'Borndate'=>'1985-2-5',
            'height'=>'185cm',
            'weight'=>'88kg',
            'country'=>'Portugal',
            'description' => 'Born on February 5, 1985 in Funchal, Madeira, Portugal, Portuguese football player.',
            'link' => 'https://baike.baidu.com/item/%E5%85%8B%E9%87%8C%E6%96%AF%E8%92%82%E4%BA%9A%E8%AF%BA%C2%B7%E7%BD%97%E7%BA%B3%E5%B0%94%E5%A4%9A/4510104?fr=aladdin',
            'image' => 'Cluo.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Lionel Messi',
              'Borndate'=>'1988-9-5',
            'height'=>'170cm',
            'weight'=>'70kg',
            'country'=>'Argentina',
            'description' => 'Born in Rosario, Santa Fe Province, Argentina on June 24, 1987, Argentine football player and forward.',
            'link' => 'https://baike.baidu.com/item/%E9%87%8C%E5%A5%A5%C2%B7%E6%A2%85%E8%A5%BF/4443471?fromtitle=%E6%A2%85%E8%A5%BF&fromid=741204&fr=aladdin',
            'image' => 'messi.jpg',
        ],
                 '5' => [
            'id' => 5,
            'name' => 'Raheem Sterling',
            'Borndate'=>'1990-2-5',
            'height'=>'173cm',
            'weight'=>'75kg',
            'country'=>'England',
            'description' => 'English football player, winger, played for Queens Park Rangers Football Club, Liverpool Football Club [1], now plays for Manchester City Football Club in English Football League.',
            'link' => 'https://baike.baidu.com/item/%E6%8B%89%E5%B8%8C%E5%A7%86%C2%B7%E6%96%AF%E7%89%B9%E6%9E%97/10302080',
            'image' => 'sitelin.jpg',
        ],
        '6' => [
            'id' => 6,
            'name' => 'Josep Guardiola',
              'Borndate'=>'1975-2-5',
            'height'=>'175cm',
            'weight'=>'67kg',
            'country'=>'spain',
            'description' => 'Born on January 18, 1971 in Santpedor, Catalonia, Spain, former Spanish football player and coach, '
            . 'coached Barcelona B team, FC Barcelona, Bayern Munich FC, and now coaches Manchester City Football Club.',
            'link' => 'https://baike.baidu.com/item/%E4%BD%95%E5%A1%9E%E6%99%AE%C2%B7%E7%93%9C%E8%BF%AA%E5%A5%A5%E6%8B%89/6098892?fromtitle=%E7%93%9C%E8%BF%AA%E5%A5%A5%E6%8B%89&fromid=10080604&fr=aladdin',
            'image' => 'gua.jpg',
        ],
    
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
