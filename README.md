# zodiac
Service to take in a date of birth and return your associated zodiac/star-sign

# Usage
1. Inject class as dependency: 

use App\Services\Zodiac;
...
/** @var Zodiac $zodiac */
private $zodiac;
...
/**
 * Constructor.
 * @param Zodiac $zodiac
 */
public function __construct(
    Zodiac $zodiac
){
    $this->zodiac = $zodiac;
}

2. Call the get method with $this->zodiac->get('2020-01-11');

## Contributors

Donal Lynch <donal.lynch.msc@gmail.com>

## License

© 2020 Donal Lynch Software, Inc.