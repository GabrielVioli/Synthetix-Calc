<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpressionValidateRequest;
use Illuminate\Http\Request;
use App\Http\services\ServiceExpressionIA;

class CalculatorController extends Controller
{

    public function index()
    {
        return view("Calculator");
    }

    public function calculate(
        ExpressionValidateRequest $request,
        ServiceExpressionIA $service
    ) {

        $data = $request->validated();
        $expression = $data['expression'];

        try {
            $result = $service->getExpression($expression);
            return redirect()->route('index')->with('result', $result);
        } catch (\Exception $e) {
            return back()->with('result', 'Serviço temporariamente indisponível. Tente novamente em instantes.');
        }

    }
}
