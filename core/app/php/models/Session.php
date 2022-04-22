<?php


class Session
{
    private $AfAccount = '';
    private $databaseId = '';
    private $databaseIp = '127.0.0.1';
    private $databasePort = 0;
    private $databaseName = '';
    private $databaseUser = '';
    private $databasePass = '';
    private $maximumCompanies = 0;
    private $maximumBranches = 0;
    private $maximumUsers = 0;
    private $maximumVehicles = 0;
    private $maximumAffiliates = 0;
    private $maximumWebServiceQuota = 0;
    private $mustPay = 0;
    private $mustPayId = 0;
    private $remarks = '';
    private $usedSpace = 0;
    private $totalSpace = 0;
    private $siiAeat = 0;
    private $facturaE = 0;
    private $userCode = 0;
    private $userName = '';
    private $numberOfLogins = 0;
    private $branchAssigned = 0;
    private $branchAssignedName = '';
    private $seriesAssigned = 0;
    private $companyLanguage = '';
    private $companyLanguageAlt = '';
    private $language = '';
    private $decimalSeparator = ',';
    private $thousandSeparator = '.';
    private $currencyName = '';
    private $currencySymbol = '';
    private $currencyNumberOfDecimals = 2;
    private $timezoneUTC = '';
    private $timezonePHP = '';
    private $company = '';
    private $version = '';
    private $department = '';
    private $feedback = '';
    private $lastAccess = '';
    private $ownerId = 0;
    private $sessionId = '';
    private $checking = 0;
    private $panelWeb = 0;
    private $privileges = [];
    PRIVATE $hibernation = 0;

    /**
     * @return int
     */
    public function getChecking()
    {
        return $this->checking;
    }

    /**
     * @param int $value
     * @return Session
     */
    public function setChecking($value)
    {
        $this->checking = $value;
        return $this;
    }
    
    /**
     * @return int
     */
    public function getPanelWeb()
    {
        return $this->panelWeb;
    }

    /**
     * @param int $value
     * @return Session
     */
    public function setPanelWeb($value)
    {
        $this->panelWeb = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAfAccount()
    {
        return $this->AfAccount;
    }

    /**
     * @param string $AfAccount
     * @return Session
     */
    public function setAfAccount($AfAccount)
    {
        $this->AfAccount = $AfAccount;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatabaseId()
    {
        return $this->databaseId;
    }

    /**
     * @param string $databaseId
     * @return Session
     */
    public function setDatabaseId($databaseId)
    {
        $this->databaseId = $databaseId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatabaseIp()
    {
        return $this->databaseIp;
    }

    /**
     * @param string $databaseIp
     * @return Session
     */
    public function setDatabaseIp($databaseIp)
    {
        $this->databaseIp = $databaseIp;
        return $this;
    }

    /**
     * @return int
     */
    public function getDatabasePort()
    {
        return $this->databasePort;
    }

    /**
     * @param int $databasePort
     * @return Session
     */
    public function setDatabasePort($databasePort)
    {
        $this->databasePort = $databasePort;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatabaseName()
    {
        return $this->databaseName;
    }

    /**
     * @param string $databaseName
     * @return Session
     */
    public function setDatabaseName($databaseName)
    {
        $this->databaseName = $databaseName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatabaseUser()
    {
        return $this->databaseUser;
    }

    /**
     * @param string $databaseUser
     * @return Session
     */
    public function setDatabaseUser($databaseUser)
    {
        $this->databaseUser = $databaseUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatabasePass()
    {
        return $this->databasePass;
    }

    /**
     * @param string $databasePass
     * @return Session
     */
    public function setDatabasePass($databasePass)
    {
        $this->databasePass = $databasePass;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaximumCompanies()
    {
        return $this->maximumCompanies;
    }

    /**
     * @param int $maximumCompanies
     * @return Session
     */
    public function setMaximumCompanies($maximumCompanies)
    {
        $this->maximumCompanies = $maximumCompanies;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaximumBranches()
    {
        return $this->maximumBranches;
    }

    /**
     * @param int $maximumBranches
     * @return Session
     */
    public function setMaximumBranches($maximumBranches)
    {
        $this->maximumBranches = $maximumBranches;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaximumUsers()
    {
        return $this->maximumUsers;
    }

    /**
     * @param int $maximumUsers
     * @return Session
     */
    public function setMaximumUsers($maximumUsers)
    {
        $this->maximumUsers = $maximumUsers;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaximumVehicles()
    {
        return $this->maximumVehicles;
    }

    /**
     * @param int $maximumVehicles
     * @return Session
     */
    public function setMaximumVehicles($maximumVehicles)
    {
        $this->maximumVehicles = $maximumVehicles;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaximumAffiliates()
    {
        return $this->maximumAffiliates;
    }

    /**
     * @param int $maximumAffiliates
     * @return Session
     */
    public function setMaximumAffiliates($maximumAffiliates)
    {
        $this->maximumAffiliates = $maximumAffiliates;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaximumWebServiceQuota()
    {
        return $this->maximumWebServiceQuota;
    }

    /**
     * @param int $maximumWebServiceQuota
     * @return Session
     */
    public function setMaximumWebServiceQuota($maximumWebServiceQuota)
    {
        $this->maximumWebServiceQuota = $maximumWebServiceQuota;
        return $this;
    }

    /**
     * @return int
     */
    public function getMustPay()
    {
        return $this->mustPay;
    }

    /**
     * @param int $mustPay
     * @return Session
     */
    public function setMustPay($mustPay)
    {
        $this->mustPay = $mustPay;
        return $this;
    }

    /**
     * @return int
     */
    public function getMustPayId()
    {
        return $this->mustPayId;
    }

    /**
     * @param int $mustPayId
     * @return Session
     */
    public function setMustPayId($mustPayId)
    {
        $this->mustPayId = $mustPayId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * @param string $remarks
     * @return Session
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * @return int
     */
    public function getUsedSpace()
    {
        return $this->usedSpace;
    }

    /**
     * @param int $usedSpace
     * @return Session
     */
    public function setUsedSpace($usedSpace)
    {
        $this->usedSpace = $usedSpace;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalSpace()
    {
        return $this->totalSpace;
    }

    /**
     * @param int $totalSpace
     * @return Session
     */
    public function setTotalSpace($totalSpace)
    {
        $this->totalSpace = $totalSpace;
        return $this;
    }

    /**
     * @return int
     */
    public function getSiiAeat()
    {
        return $this->siiAeat;
    }

    /**
     * @param int $siiAeat
     * @return Session
     */
    public function setSiiAeat($siiAeat)
    {
        $this->siiAeat = $siiAeat;
        return $this;
    }

    /**
     * @return int
     */
    public function getFacturaE()
    {
        return $this->facturaE;
    }

    /**
     * @param int $facturaE
     * @return Session
     */
    public function setFacturaE($facturaE)
    {
        $this->facturaE = $facturaE;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserCode()
    {
        return $this->userCode;
    }

    /**
     * @param int $userCode
     * @return Session
     */
    public function setUserCode($userCode)
    {
        $this->userCode = $userCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return Session
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfLogins()
    {
        return $this->numberOfLogins;
    }

    /**
     * @param int $numberOfLogins
     * @return Session
     */
    public function setNumberOfLogins($numberOfLogins)
    {
        $this->numberOfLogins = $numberOfLogins;
        return $this;
    }

    /**
     * @return int
     */
    public function getBranchAssigned()
    {
        return $this->branchAssigned;
    }

    /**
     * @param int $branchAssigned
     * @return Session
     */
    public function setBranchAssigned($branchAssigned)
    {
        $this->branchAssigned = $branchAssigned;
        return $this;
    }

    /**
     * @return string
     */
    public function getBranchAssignedName()
    {
        return $this->branchAssignedName;
    }

    /**
     * @param string $branchAssignedName
     * @return Session
     */
    public function setBranchAssignedName($branchAssignedName)
    {
        $this->branchAssignedName = $branchAssignedName;
        return $this;
    }

    /**
     * @return int
     */
    public function getSeriesAssigned()
    {
        return $this->seriesAssigned;
    }

    /**
     * @param int $seriesAssigned
     * @return Session
     */
    public function setSeriesAssigned($seriesAssigned)
    {
        $this->seriesAssigned = $seriesAssigned;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyLanguage()
    {
        return $this->companyLanguage;
    }

    /**
     * @param string $companyLanguage
     * @return Session
     */
    public function setCompanyLanguage($companyLanguage)
    {
        $this->companyLanguage = $companyLanguage;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyLanguageAlt()
    {
        return $this->companyLanguageAlt;
    }

    /**
     * @param string $companyLanguageAlt
     * @return Session
     */
    public function setCompanyLanguageAlt($companyLanguageAlt)
    {
        $this->companyLanguageAlt = $companyLanguageAlt;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return Session
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getDecimalSeparator()
    {
        return $this->decimalSeparator;
    }

    /**
     * @param string $decimalSeparator
     * @return Session
     */
    public function setDecimalSeparator($decimalSeparator)
    {
        $this->decimalSeparator = $decimalSeparator;
        return $this;
    }

    /**
     * @return string
     */
    public function getThousandSeparator()
    {
        return $this->thousandSeparator;
    }

    /**
     * @param string $thousandSeparator
     * @return Session
     */
    public function setThousandSeparator($thousandSeparator)
    {
        $this->thousandSeparator = $thousandSeparator;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyName()
    {
        return $this->currencyName;
    }

    /**
     * @param string $currencyName
     * @return Session
     */
    public function setCurrencyName($currencyName)
    {
        $this->currencyName = $currencyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencySymbol()
    {
        return $this->currencySymbol;
    }

    /**
     * @param string $currencySymbol
     * @return Session
     */
    public function setCurrencySymbol($currencySymbol)
    {
        $this->currencySymbol = $currencySymbol;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyNumberOfDecimals()
    {
        return $this->currencyNumberOfDecimals;
    }

    /**
     * @param int $currencyNumberOfDecimals
     * @return Session
     */
    public function setCurrencyNumberOfDecimals($currencyNumberOfDecimals)
    {
        $this->currencyNumberOfDecimals = $currencyNumberOfDecimals;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimezoneUTC()
    {
        return $this->timezoneUTC;
    }

    /**
     * @param string $timezoneUTC
     * @return Session
     */
    public function setTimezoneUTC($timezoneUTC)
    {
        $this->timezoneUTC = $timezoneUTC;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimezonePHP()
    {
        return $this->timezonePHP;
    }

    /**
     * @param string $timezonePHP
     * @return Session
     */
    public function setTimezonePHP($timezonePHP)
    {
        $this->timezonePHP = $timezonePHP;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return Session
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return Session
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param string $department
     * @return Session
     */
    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * @param string $feedback
     * @return Session
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastAccess()
    {
        return $this->lastAccess;
    }

    /**
     * @param string $lastAccess
     * @return Session
     */
    public function setLastAccess($lastAccess)
    {
        $this->lastAccess = $lastAccess;
        return $this;
    }

    /**
     * @return int
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param int $ownerId
     * @return Session
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return Session
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }



    /**
     * @return Privilege[]
     */
    public function getPrivileges()
    {
        return $this->privileges;
    }

    /**
     * @param Privilege[] $privileges
     * @return Session
     */
    public function setPrivileges($privileges)
    {
        $this->privileges = $privileges;
        return $this;
    }

    /**
     * @param Privilege $privilege
     * @return $this
     */
    public function addPrivilege($privilege){
        $this->privileges[] = $privilege;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsedSpacePercent(){
        return number_format(round((($this->usedSpace * 100) / $this->totalSpace), 2),2);
    }

    /**
     * @return int
     */
    public function getHibernation() {
        return $this->hibernation;
    }

    /**
     * @param $hibernation
     * @return $this
     */
    public function setHibernation($hibernation) {
        $this->hibernation = $hibernation;
        return $this;
    }

}
