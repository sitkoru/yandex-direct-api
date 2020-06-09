<?php

namespace directapi\services\reports\enum;

class ReportFilterOperatorsEnum
{
    /**
     * значение поля равно значению из Values
     */
    public const EQUALS = 'EQUALS';

    /**
     * значение поля не равно значению из Values
     */
    public const NOT_EQUALS = 'NOT_EQUALS';

    /**
     * значение поля равно любому значению из Values
     */
    public const IN = 'IN';

    /**
     * значение поля не равно ни одному значению из Values
     */
    public const NOT_IN = 'NOT_IN';

    /**
     * значение поля меньше значения из Values
     */
    public const LESS_THAN = 'LESS_THAN';

    /**
     * значение поля больше значения из Values
     */
    public const GREATER_THAN = 'GREATER_THAN';

    /**
     * значение поля начинается с значения из Values
     */
    public const STARTS_WITH_IGNORE_CASE = 'STARTS_WITH_IGNORE_CASE';

    /**
     * значение поля не начинается с значения из Values
     */
    public const DOES_NOT_START_WITH_IGNORE_CASE = 'DOES_NOT_START_WITH_IGNORE_CASE';

    /**
     * значение поля начинается с любого из значений, указанных в Values
     */
    public const STARTS_WITH_ANY_IGNORE_CASE = 'STARTS_WITH_ANY_IGNORE_CASE';

    /**
     * значение поля не начинается ни с одного из значений, указанных в Values
     */
    public const DOES_NOT_START_WITH_ALL_IGNORE_CASE = 'DOES_NOT_START_WITH_ALL_IGNORE_CASE';
}
