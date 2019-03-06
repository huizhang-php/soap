<?php
class Robot{
    public function receiveInventoryResult($inventoryResultInfoArray){
        $webServiceResult = array(
            'INFO' => 'info',
            'STATUS' => 'status',
        );

        $webServiceResult['INFO'] = $inventoryResultInfoArray->item[0]->KCSL;

        return $webServiceResult;
    }
    public function receiveStandPointInfo($standPointInfoArray){
        $webServiceResult = array(
            'INFO' => 'info',
            'STATUS' => 'status',
        );
        if($standPointInfoArray->item[0]->POINTDES){
            $webServiceResult['INFO'] = 'we can change it';
        }
        return $webServiceResult;
    }

    public function receiveTaskResult($taskResultInfo){
        $EXEC_STATE = $taskResultInfo->EXEC_STATE;
        $PICTURE = $taskResultInfo->PICTURE;
        $TASK_NO = $taskResultInfo->TASK_NO;

        $webServiceResult = array(
            'INFO' => 'info',
            'STATUS' => $PICTURE,
        );
        $webServiceResult['INFO'] = $EXEC_STATE;
        return $webServiceResult;
    }

    public function Exception($exception){
        $this->exception = $exception;
        return $this->exception;
    }
}