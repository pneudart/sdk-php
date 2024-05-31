<?php

namespace net\authorize\api\contract\v1;

/**
 * Class representing GetAUJobDetailsResponse
 */
class GetAUJobDetailsResponse extends ANetApiResponseType
{

    /**
     * @property integer $totalNumInResultSet
     */
    private $totalNumInResultSet = null;

    /**
     * @property \net\authorize\api\contract\v1\AuDetailsType $auDetails
     */
    private $auDetails = null;

    /**
     * Gets as totalNumInResultSet
     *
     * @return integer
     */
    public function getTotalNumInResultSet()
    {
        return $this->totalNumInResultSet;
    }

    /**
     * Sets a new totalNumInResultSet
     *
     * @param integer $totalNumInResultSet
     * @return self
     */
    public function setTotalNumInResultSet($totalNumInResultSet)
    {
        $this->totalNumInResultSet = $totalNumInResultSet;
        return $this;
    }

    /**
     * Adds as auDetails
     *
     * @return self
     * @param \net\authorize\api\contract\v1\AuDetailsType $auDetails
     */
    public function addToAuDetails(\net\authorize\api\contract\v1\AuDetailsType $auDetails)
    {
        $this->auDetails[] = $auDetails;
        return $this;
    }

    /**
     * isset auDetails
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuDetails($index)
    {
        return isset($this->auDetails[$index]);
    }

    /**
     * unset auDetails
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuDetails($index)
    {
        unset($this->auDetails[$index]);
    }

    /**
     * Gets as auDetails
     *
     * @return \net\authorize\api\contract\v1\AuDetailsType[]
     */
    public function getAuDetails()
    {
        return $this->auDetails;
    }

    /**
     * Sets a new auDetails
     *
     * @param \net\authorize\api\contract\v1\AuDetailsType[] $auDetails
     * @return self
     */
    public function setAuDetails(array $auDetails)
    {
        $this->auDetails = $auDetails;
        return $this;
    }


    // Json Set Code
    public function set($data)
    {
        if(is_array($data) || is_object($data)) {
			$mapper = \net\authorize\util\Mapper::Instance();
			foreach($data AS $key => $value) {
				$classDetails = $mapper->getClass(get_class() , $key);
	 
				if($classDetails !== NULL ) {
					if ($classDetails->isArray) {
						if ($classDetails->isCustomDefined) {
							foreach($value AS $keyChild => $valueChild) {
								$type = new $classDetails->className;
								$type->set($valueChild);
								$this->{'addTo' . $key}($type);
							}
						}
						else if ($classDetails->className === 'DateTime' || $classDetails->className === 'Date' ) {
							foreach($value AS $keyChild => $valueChild) {
								$type = new \DateTime($valueChild);
								$this->{'addTo' . $key}($type);
							}
						}
						else {
							foreach($value AS $keyChild => $valueChild) {
								$this->{'addTo' . $key}($valueChild);
							}
						}
					}
					else {
						if ($classDetails->isCustomDefined){
							$type = new $classDetails->className;
							$type->set($value);
							$this->{'set' . $key}($type);
						}
						else if ($classDetails->className === 'DateTime' || $classDetails->className === 'Date' ) {
							$type = new \DateTime($value);
							$this->{'set' . $key}($type);
						}
						else {
							$this->{'set' . $key}($value);
						}
					}
				}
			}
		}
    }
    
}

