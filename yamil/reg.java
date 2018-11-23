/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package practicaas;

import java.util.Scanner;

/**
 *
 * @author ADMCC
 */
public class reg {
    Scanner dato  = new Scanner(System.in);
    public void VerificaDatos(int ed)throws Exception{
        if (ed<18){
            throw new exep();
        }
        
    }
}
