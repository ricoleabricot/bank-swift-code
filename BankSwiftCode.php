<?php
/**
 * This file is part of the BankSwiftCode package.
 * Pierrick Gicquelais <pierrick.gicquelais@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * File that was distributed with this source code.
 *
 */

/**
 * Class BankSwiftCode
 */
class BankSwiftCode
{
    /** @var string */
    protected $locale;

    /** @var array */
    protected $registry;

    /**
     * BankSwiftCode constructor.
     *
     * @param string $locale        The locale to apply on class, by default "fr"
     */
    public function __construct($locale = "fr")
    {
        $this->locale = $locale;
        $this->registry = array();

        if ($locale) {
            $this->loadRegistry();
        }
    }

    /**
     * Load registry given $locale
     *
     * @param string $locale        The locale file to load
     */
    public function loadSwiftCodesWithLocale(string $locale)
    {
        $this->locale = $locale;
        $this->loadRegistry();
    }

    /**
     * Get bank informations given swift code
     *
     * @param string $code          The swift code to find in registry
     * @return mixed|null           If true all bank informations, otherwise null
     */
    public function getBankInformationsBySwiftCode(string $code)
    {
        $results = array_filter($this->registry, function($entry) use ($code) {
            return $entry['swift_code'] === $code;
        });

        return $results;
    }

    /**
     * Get bank informations given bank identifier
     *
     * @param string $id            The identifier to find in registry
     * @return mixed|null           If true all bank informations, otherwise null
     */
    public function getBankInformationsById(string $id)
    {
        $results = array_filter($this->registry, function($entry) use ($id) {
            return $entry['bank_id'] === $id;
        });

        return $results;
    }

    /**
     * Get bank informations given bank name
     *
     * @param string $name          The name to find in registry
     * @return mixed|null           If true all bank informations, otherwise null
     */
    public function getBankInformationsByBankName(string $name)
    {
        $results = array_filter($this->registry, function($entry) use ($name) {
            return strtolower($entry['bank_name']) === strtolower($name);
        });

        return $results;
    }

    /**
     * Read file and load registry given intern locale
     */
    protected function loadRegistry()
    {
        $content = file_get_contents("lib/".$this->locale."_swift_codes");
        if ($content) {
            $rows = explode("\n", $content);

            if (!empty($rows)) {
                foreach ($rows as $row) {
                    preg_match_all('`"([^"]*)"`', $row, $results);

                    $results = $results[1];
                    array_push($this->registry, array(
                        'bank_id' => $results[0],
                        'bank_city' => $results[1],
                        'swift_code' => $results[2],
                        'bank_code' => $results[3],
                        'country_code' => $results[4],
                        'location_code' => $results[5],
                        'branch_code' => $results[6],
                        'bank_name' => $results[7]
                    ));
                }
            }
        }
    }
}