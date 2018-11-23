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
public class Practicaas {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws Exception {
        exep ex=new exep();
        reg r=new reg();
        Scanner dato=new Scanner(System.in);
        int dimension,edad;
        System.out.println("ingrese la cantidad de edades que entrara");
        dimension =dato.nextInt();
        int[] eda= new int [dimension];
        for(int i=0;i<dimension;i++){
            do{
            System.out.println("ingrese edades");
            edad= dato.nextInt();
            try{
                r.VerificaDatos(edad);
                break;
            }catch (exep e){
                System.out.println(e.getMessage());
            }
        }while(true);
            eda[i]=edad;
           
        
        // TODO code application logic here
    }
    }
}
    